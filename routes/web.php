<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Foundation\Providers\ArtisanServiceProvider;
use App\Http\Controllers\PhotoController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{articlesId}', [ArticleController::class, 'articles']);

Route::get('/hello', [HomeController::class, 'hello']);
Route::get('/world', [HomeController::class, 'world']);

Route::get('/posts/{post}/comments/{comment}', [ArticleController::class, 'postComment']);

Route::get('/user/{name?}', [HomeController::class, 'user']);

Route::resource('photos', PhotoController::class);


Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);

Route::get('/greeting', [WelcomeController::class, 'greeting']);
