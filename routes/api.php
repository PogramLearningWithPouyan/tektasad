<?php

//use App\Http\Controllers\Api\V1\ArticlesCatergoryController;
use App\Http\Controllers\Api\V1\ArticlesController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\GaleryController;
use App\Http\Controllers\Api\V1\SitemapController;
use App\Http\Controllers\Api\V1\SlidersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Passport;

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
//Passport::routes();

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
    Route::post('/oauth/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');

    Route::middleware('auth:api')->group(function () {
        Route::post('article-create', [ArticlesController::class, 'add']);
        Route::post('gallery-create', [GaleryController::class, 'add']);
        Route::post('sliders-update', [SlidersController::class, 'update']);
        Route::post('sliders-create', [SlidersController::class, 'add']);
        Route::post('gallery-update', [GaleryController::class, 'update']);
        Route::post('gallery-delete', [GaleryController::class, 'delete_from']);
        Route::post('sliders-delete', [SlidersController::class, 'delete_from']);
        Route::post('article-file', [ArticlesController::class, 'fileUpdload']);
        Route::post('article-update', [ArticlesController::class, 'update']);
        Route::post('article-delete', [ArticlesController::class, 'delete_from']);
    });
});
