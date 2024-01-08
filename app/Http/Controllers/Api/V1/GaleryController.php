<?php

namespace App\Http\Controllers\Api\V1;

use App\Classes\FileUpload;
use App\Enum\FileCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\GaleryRequest;
use App\Http\Resources\GaleryResource;
use App\Models\Galery;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index(): JsonResponse
    {
        $galery = Galery::where('is_show', true)->with(['thumbnail'])->get();
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
        ]);
        return $this->successResponse($slider->id, 'sliders save successfully');

    }
}
