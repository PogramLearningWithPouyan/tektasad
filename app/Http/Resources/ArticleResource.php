<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
        $string = $this->body;
//        $string = str_replace('src="../../../storage/uploads/', 'src="' . config('app.admin_site_url_file') . 'uploads/', $string);
//        $string = str_replace('src="../../storage/uploads/', 'src="' . config('app.admin_site_url_file'). 'uploads/', $string);
        return [
            'id'=>$this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'excerpt' => $this->excerpt,
            'body' => $string,
            'is_show' => $is_show,
            'original' => $this->thumbnail->path,
            'created_at' => $this->created_at,
            'description' => $this->description,
            'category' => $this->category,
            'keyword' => $this->keyword
        ];
    }
}
