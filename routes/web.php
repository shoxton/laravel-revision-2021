<?php

use App\Http\Controllers\ArticlesController;
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
    return view('home');
});
Route::get('contact', [App\Http\Controllers\MailController::class, 'show']);
Route::post('contact', [App\Http\Controllers\MailController::class, 'store']);
Route::get('about', function () {
    return view('about');
});

Route::get('articles', [ArticlesController::class, 'index'])->name('articles.index');

Route::post('articles', [ArticlesController::class, 'store']);

Route::get('articles/create', [ArticlesController::class, 'create']);

Route::get('articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');

Route::get('articles/{article}/edit', [ArticlesController::class, 'edit']);

Route::put('articles/{article}', [ArticlesController::class, 'update']);

