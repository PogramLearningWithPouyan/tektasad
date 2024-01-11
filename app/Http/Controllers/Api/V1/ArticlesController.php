<?php

namespace App\Http\Controllers\Api\V1;

use App\Classes\FileUpload;
use App\Enum\FileCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleAddRequest;
use App\Http\Requests\V1\ArticlesIndexRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File as LaravelFile;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{
    public function index(ArticlesIndexRequest $request): JsonResponse
    {
        $articles = Article::where('is_show', true)->with(['category', 'thumbnail', 'seo', 'tags', 'author'])->latest()
            ->paginate($request->count);
        $article= ArticleResource::collection($articles);
        return $this->successResponse([
            'articles' => $article,
            'total' => $articles->total(),
            'perPage' => $articles->perPage(),
            'currentPage' => $articles->currentPage(),
            'lastPage' => $articles->lastPage(),
        ], '');
    }

    public function show($slug): JsonResponse
    {
        $article = Article::whereSlug($slug)->where('is_show', true)->where('category_id', '!=', 15)
            ->with(['category', 'thumbnail', 'seo', 'tags', 'author'])->first();
        if (!$article)
            return $this->errorResponse('field_not_find', 404);
        $article->increment('view_count');
        $data = new ArticleResource($article);
        return $this->successResponse($data, '');
    }

    public function showOld($slug): JsonResponse
    {
        $article = Article::whereSlug($slug)->where('category_id', 15)
            ->with(['category', 'thumbnail', 'seo', 'tags', 'author'])->first();
        if (!$article)
            return $this->errorResponse('field_not_find', 404);
        $article->increment('view_count');
        $data = new ArticleResource($article);
        return $this->successResponse($data, '');
    }

    public function future(ArticlesIndexRequest $request): JsonResponse
    {
        $articles = Article::where('is_future', 1)->where('is_show', true)->latest()
            ->paginate($request->count);
        $data = ArticleResource::collection($articles);
        return $this->successResponse($data, '');
    }

    public function mostView(ArticlesIndexRequest $request): JsonResponse
    {
        $articles = Article::orderByDesc('view_count')->with(['category', 'thumbnail', 'seo', 'tags', 'author'])->where('is_show', true)
            ->paginate($request->count);
        $data = ArticleResource::collection($articles);
        return $this->successResponse($data, '');
    }

    public function add(ArticleAddRequest $request, FileUpload $fileUpload): JsonResponse
    {
        $imagePath = Storage::disk('public')->path($request->file);

        $file = File::create([
            'caption' => 'category image: ' . $request->title,
            'path' => config('app.url') . '/storage/' . $request->file,
            'extensions' => LaravelFile::mimeType($imagePath),
            'hash' => Hash::make($imagePath),
            'original_name' => $request->title,
            'size' => LaravelFile::size($imagePath),
        ]);
        $files = $fileUpload->setKey('file')
            ->setRequest($request)
            ->setCaption('article')
            ->setCategory(FileCategory::tickets)
            ->save();
        $file_id = $files->id;
        $s=Article::create(["title" => $request->title,
            'slug'=>$request->slug,
            'excerpt'=>$request->excerpt,
            'body'=>$request->body,
            'is_show'=>$request->is_show,
            "file_id" => $file_id,
            'view_count'=>0,
            'tag'=>$request->tag,
        ]);
        return $this->successResponse($s->id, 'Article created successfully');
    }
    public function fileUpdload(ArticlesFileRequest $request, FileUpload $fileUpload): JsonResponse
    {
        $files = $fileUpload->setKey('file')
            ->setRequest($request)
            ->setCaption('article')
            ->setCategory(FileCategory::tickets)
            ->save();
        return $this->successResponse($files, '');
    }
}
