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
//Laravel tests
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'show']);
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store']);
Route::get('/payments/create', [\App\Http\Controllers\PaymentsController::class, 'create'])->middleware('auth');
Route::post('/payments', [\App\Http\Controllers\PaymentsController::class, 'store'])->middleware('auth');
Route::get('/notifications', [\App\Http\Controllers\userNotificationsController::class, 'show'])->middleware('auth');

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Models\Article::take(3)->latest()->get()
    ]);

});
//GET, POST, PUT, DELETE

Route::get('/articles', [\App\Http\Controllers\ArticlesController::class, 'index'])->name('articles.index');
Route::post('/articles', [\App\Http\Controllers\ArticlesController::class, 'store']);
Route::get('/articles/create', [\App\Http\Controllers\ArticlesController::class, 'create']);
Route::get('/articles/{article}', [\App\Http\Controllers\ArticlesController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [\App\Http\Controllers\ArticlesController::class, 'edit']);
Route::put('/articles/{article}', [\App\Http\Controllers\ArticlesController::class, 'update']);



//40k
Route::get('/game/create', [\App\Http\Controllers\GameController::class, 'create']);
Route::get('/game/{game}', [\App\Http\Controllers\GameController::class, 'show']);
Route::post('/game', [\App\Http\Controllers\GameController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

