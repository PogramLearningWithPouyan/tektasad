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
        $data[$count]['url']="https://ariyarestoran.com/en";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=1;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/tr";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=1;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/fa";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=1;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/ar";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=1;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/en/about-us";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/tr/about-us";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/fa/about-us";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/ar/about-us";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/en/menu";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/tr/menu";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/fa/menu";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/ar/menu";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/en/gallery";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/tr/gallery";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/fa/gallery";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/ar/gallery";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/en/contact-us";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/tr/contact-us";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/fa/contact-us";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;
        $count+=1;

        $data[$count]['url']="https://ariyarestoran.com/ar/contact-us";
        $data[$count]['lastModified']=$time;
        $data[$count]['changeFrequency']="always";
        $data[$count]['priority']=0.9;

        $articles = Article::select('slug','category')->get();
        foreach ($articles as $article){
            $data[$count]['url']="https://ariyarestoran.com/{$article->category}/articles/{$article->slug}";
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
        $data['rules']['allow']= ["/en",
            "/tr",
            "/fa",
            "/ar",
            "/en/about-us",
            "/tr/about-us",
            "/fa/about-us",
            "/ar/about-us",
            "/en/menu",
            "/tr/menu",
            "/fa/menu",
            "/ar/menu",
            "/en/gallery",
            "/tr/gallery",
            "/fa/gallery",
            "/ar/gallery",
            "/en/articles",
            "/tr/articles",
            "/fa/articles",
            "/ar/articles",
            "/en/articles/*",
            "/tr/articles/*",
            "/fa/articles/*",
            "/ar/articles/*",
            "/en/contact-us",
            "/tr/contact-us",
            "/fa/contact-us",
            "/ar/contact-us"];
        $data['rules']['disallow']= [
            "/gp/*",
            "/_next/"];
        $data['sitemap']="https://ariyarestoran.com/sitemap.xml";
        return $this->successResponse($data, '');
    }
}
