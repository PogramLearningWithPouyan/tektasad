<?php

namespace App\Http\Controllers\Api\V1;

use App\Classes\FileUpload;
use App\Enum\FileCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleAddRequest;
use App\Http\Requests\ArticlesFileRequest;
use App\Http\Requests\ArticlesDeleteRequest;
use App\Http\Requests\ArticlesUpdateRequest;

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
        if($request->category=='all'){
            $articles = Article::whereNull('deleted_at')
                ->with([ 'thumbnail'])->latest()
                ->paginate($request->count);
        }else{
            $articles = Article::where('is_show','true')
                ->where('category', $request->category)
                ->whereNull('deleted_at')
                ->with(['thumbnail'])->latest()
                ->paginate($request->count);
        }
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
        $article = Article::where('slug',$slug)->with(['thumbnail'])->first();
        if (!$article)
            return $this->errorResponse('field not find', 404);
        $article->increment('view_count');
        $data = new ArticleResource($article);
        return $this->successResponse($data, '');
    }

    public function showOld($slug): JsonResponse
    {
        $article = Article::whereSlug($slug)->where('category_id', 15)
            ->with(['thumbnail'])->first();
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
        $articles = Article::orderByDesc('view_count')->with(['thumbnail'])->where('is_show', true)
            ->paginate($request->count);
        $data = ArticleResource::collection($articles);
        return $this->successResponse($data, '');
    }

    public function add(ArticleAddRequest $request, FileUpload $fileUpload): JsonResponse
    {
        $article = Article::where('slug', $request->slug)->first();
        if ($article)
            return $this->errorResponse('field is exist', 404);
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
            'category'=>$request->category,
            'keyword'=>$request->keyword,
            'description'=>$request->description,
        ]);

        return $this->successResponse($s->id, 'Article created successfully');
    }

    public function fileUpdload(ArticlesFileRequest $request, FileUpload $fileUpload): JsonResponse
    {
        $files = $fileUpload->setKey('file')
            ->setRequest($request)
            ->setCaption('article_file')
            ->setCategory(FileCategory::tickets)
            ->save();
        $file=$files->path;
        return response()->json(['location'=>$file]);
//        return $this->successResponse($file, '');
    }

    public function delete_from(ArticlesDeleteRequest $request):JsonResponse
    {
        Article::where('slug', $request->slug)->delete();
        return $this->successResponse(true, 'Article delete successfully');
    }

    public function update(ArticlesUpdateRequest $request, FileUpload $fileUpload):JsonResponse
    {
        $article = Article::where('slug', $request->slug)->first();
        if (!filled($article))
            return $this->errorResponse(__('item not found'), 404);
        if(isset($request->new_slug))
            $article->slug=$request->new_slug;
        if(isset($request->excerpt))
            $article->excerpt=$request->excerpt;
        if(isset($request->body))
            $article->body=$request->body;
        if(isset($request->is_show))
            $article->is_show=$request->is_show;
        if(isset($request->file)){
            $files = $fileUpload->setKey('file')
                ->setRequest($request)
                ->setCaption('article')
                ->setCategory(FileCategory::tickets)
                ->save();
            $article->file_id=$files->id;
        }
        if(isset($request->title))
            $article->title=$request->title;
        if(isset($request->category))
            $article->category=$request->category;
        if(isset($request->description))
            $article->description=$request->description;
        if(isset($request->keyword))
            $article->keyword=$request->keyword;
        $article->save();
        return $this->successResponse($article->id, '$article update successfully');
    }
}
