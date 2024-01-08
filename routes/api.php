<?php

use App\Http\Controllers\Api\V1\ArticlesCatergoryController;
use App\Http\Controllers\Api\V1\ArticlesController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\GaleryController;
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
    Route::get('article-show/{slug}', [ArticlesController::class, 'show']);
    Route::get('article-old-show/{slug}', [ArticlesController::class, 'showOld']);
    Route::get('article-future', [ArticlesController::class, 'future']);
    Route::get('article-most-view', [ArticlesController::class, 'mostView']);
    Route::get('sitemap.xml', [SitemapController::class, 'index']);
    Route::get('sliders', [SlidersController::class, 'index']);
    Route::get('gallery', [GaleryController::class, 'index']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('article-create', [ArticlesController::class, 'add']);
    Route::post('gallery-create', [GaleryController::class, 'add']);
    Route::post('sliders-create', [SlidersController::class, 'add']);
//    Route::middleware('auth.custom')->get('/api/protected', function () {
//
//    });
});
