<?php

namespace App\Http\Controllers\Api\V1;

use App\Enum\FileCategory;
use App\Classes\FileUpload;
use App\Http\Controllers\Controller;
use App\Http\Requests\SlidersRequest;
use App\Http\Resources\SlidersResource;
use App\Models\Sliders;
use Illuminate\Http\JsonResponse;

class SlidersController extends Controller
{
    public function index():JsonResponse
    {
        $sliders = Sliders::where('is_show', 1)->with(['thumbnail'])->orderBy('updated_at', 'desc')->orderBy('created_at', 'desc')->get();
        $sliders = SlidersResource::collection($sliders);
        return $this->successResponse(['sliders'=>$sliders], '');
    }

    public function add(SlidersRequest $request, FileUpload $fileUpload)
    {
        $file = $fileUpload->setKey('file')
            ->setRequest($request)
            ->setCaption('sliders')
            ->setCategory(FileCategory::tickets)
            ->save();
        $file_id = $file->id;
        $slider=Sliders::create(["seo" => $request->seo,
            'is_show'=>$request->is_show,
            "file_id" => $file_id,
        ]);
        return $this->successResponse($slider->id, 'sliders save successfully');

    }

}
