<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GaleryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if($this->is_show=='true'){
            $is_show=true;
        }else{
            $is_show=false;
        }
        return [
            'id' => $this->id,
            'category'=>$this->category,
            'original' => $this->thumbnail->path,
            'title' => $this->title,
            'is_show'=>$is_show
        ];
    }
}
