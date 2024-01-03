<?php

use App\Http\Controllers\Api\V1\ArticlesCatergoryController;
use App\Http\Controllers\Api\V1\ArticlesController;
use App\Http\Controllers\Api\V1\SitemapController;
use App\Http\Controllers\Api\V1\SlidersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::prefix('v1/')->namespace('api/v1/')->group(function () {
    Route::get('articles', [ArticlesController::class, 'index']);
    Route::get('article-category', [ArticlesCatergoryController::class, 'index']);
    Route::post('category-show', [ArticlesCatergoryController::class, 'show']);
    Route::get('article-show/{slug}', [ArticlesController::class, 'show']);
    Route::get('article-old-show/{slug}', [ArticlesController::class, 'showOld']);
    Route::get('article-future', [ArticlesController::class, 'future']);
    Route::get('article-most-view', [ArticlesController::class, 'mostView']);
    Route::get('sitemap.xml', [SitemapController::class, 'index']);
    Route::get('sliders', [SlidersController::class, 'index']);
    Route::get('sliders-create', [SlidersController::class, 'add']);

});
