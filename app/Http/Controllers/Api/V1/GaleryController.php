<?php

namespace App\Http\Controllers\Api\V1;

use App\Classes\FileUpload;
use App\Enum\FileCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\GaleryDeleteRequest;
use App\Http\Requests\GaleryRequest;
use App\Http\Requests\GaleryUpdateRequest;
use App\Http\Resources\GaleryResource;
use App\Models\Galery;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index(): JsonResponse
    {
        $galery = Galery::with(['thumbnail'])->whereNull('deleted_at')->get();
        $galeres= GaleryResource::collection($galery);
        return $this->successResponse($galeres, '');
    }
    public function add(GaleryRequest $request, FileUpload $fileUpload): JsonResponse
    {
        $file = $fileUpload->setKey('file')
            ->setRequest($request)
            ->setCaption('gallery')
            ->setCategory(FileCategory::tickets)
            ->save();
        $file_id = $file->id;
        $slider=Galery::create(["title" => $request->title,
            'is_show'=>$request->is_show,
            "file_id" => $file_id,
            'category'=>$request->category
        ]);
        return $this->successResponse($slider->id, 'gallery save successfully');
    }
    public function update(GaleryUpdateRequest $request):JsonResponse
    {
        $galery = Galery::where('id', $request->id)->first();
//        $sliders = Sliders::find($request->id);
        if (!filled($galery))
            return $this->errorResponse(__('item not found'), 404);
        if(isset($request->title))
            $galery->title=$request->title;
        if(isset($request->is_show))
            $galery->is_show=$request->is_show;
        if(isset($request->category))
            $galery->category=$request->category;
        $galery->save();
        return $this->successResponse($galery->id, 'gallery update successfully');
    }

    public function delete_from(GaleryDeleteRequest $request):JsonResponse
    {
        Galery::where('id', $request->id)->delete();
        return $this->successResponse(true, 'gallery delete successfully');
    }

}
