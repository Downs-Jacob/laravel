<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Models\Article::take(3)->latest()->get()
    ]);

});

Route::get('/articles/{article}', [\App\Http\Controllers\ArticlesController::class, 'show']);






Route::get('/game/create', [\App\Http\Controllers\GameController::class, 'create']);

Route::get('/game/{game}', [\App\Http\Controllers\GameController::class, 'show']);

Route::post('/game', [\App\Http\Controllers\GameController::class, 'store']);

// Laravel Testing



Route::get('posts/{post}', [\App\Http\Controllers\PostsController::class, 'show']);
