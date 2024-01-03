<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index(): JsonResponse
    {
        $count=0;
        $time=Carbon::now()->format('Y-m-d');
        $data=[];
        $data[$count]['url']="https://charsooq.com";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=1;
        $count+=1;
        $data[$count]['url']="https://charsooq.com/calculator";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $articles = Article::select('slug','category_id')->with(['category'])->get();
        foreach ($articles as $article){
            $data[$count]['url']="https://charsooq.com/articles/{$article->slug}";
            $data[$count]['lastModified']=$time;
            $data[$count]['changeFrequency']="always";
            $data[$count]['priority']=0.9;
            $count+=1;
        }
        return $this->successResponse($data, '');
    }
    public function robot(): JsonResponse
    {
        $data['rules']['userAgent']="*";
        $data['rules']['allow']= ["/",
            "/about-us",
            "/articles",
            "/articles/*",
            "/contact-us"];
        $data['rules']['disallow']= ["/dashboard",
            "/dashboard/*",
            "/gp/*",
            "/_next/"];
        $data['sitemap']='https://charsooq.com/sitemap.xml';
        return $this->successResponse($data, '');
    }
}
