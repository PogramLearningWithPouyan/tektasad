<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleindexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $string = $this->body;
        $string = str_replace('src="../../../storage/uploads/', 'src="' . config('app.admin_site_url_file') . 'uploads/', $string);
        $string = str_replace('src="../../storage/uploads/', 'src="' . config('app.admin_site_url_file'). 'uploads/', $string);
        return [
            'category' => ['name' => $this->category->name, 'slug' => $this->category->slug],
            'title' => $this->title,
            'slug' => $this->slug,
            'excerpt' => $this->excerpt,
            'body' => $string,
            'is_show' => $this->is_show,
            'image' => ['path' => $this->thumbnail->path, 'caption' => $this->thumbnail->caption],
            'created_by' => $this->author->name,
            'created_at' => showDate($this->created_at),
            'seo' => [
                'title' => $this->seo->title,
                'description' => $this->seo->description,
                'keyword' => $this->seo->keyword
            ],
        ];
    }
}
