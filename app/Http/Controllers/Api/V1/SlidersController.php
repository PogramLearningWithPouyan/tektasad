<?php

namespace App\Http\Controllers\Api\V1;

use App\Enum\FileCategory;
use App\Classes\FileUpload;
use App\Http\Controllers\Controller;
use App\Http\Requests\SlidersDeleteRequest;
use App\Http\Requests\SlidersRequest;
use App\Http\Requests\SlidersUpdateRequest;
use App\Http\Resources\SlidersResource;
use App\Models\Sliders;
use Illuminate\Http\JsonResponse;

class SlidersController extends Controller
{
    public function index():JsonResponse
    {
        $sliders = Sliders::with(['thumbnail'])->whereNull('deleted_at')->orderBy('updated_at', 'desc')->orderBy('created_at', 'desc')->get();
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
            'title'=>$request->title
        ]);
        return $this->successResponse($slider->id, 'sliders save successfully');

    }
    public function update(SlidersUpdateRequest $request):JsonResponse
    {
        $sliders = Sliders::where('id', $request->id)->first();
//        $sliders = Sliders::find($request->id);
        if (!filled($sliders))
            return $this->errorResponse(__('item not found'), 404);
        if(isset($request->title))
            $sliders->title=$request->title;
        if(isset($request->is_show))
            $sliders->is_show=$request->is_show;
        if(isset($request->seo))
            $sliders->seo=$request->seo;
        $sliders->save();
        return $this->successResponse($sliders->id, 'sliders update successfully');

    }
    public function delete_from(SlidersDeleteRequest $request):JsonResponse
    {
        Sliders::where('id', $request->id)->delete();
        return $this->successResponse(true, 'sliders delete successfully');
    }
}
