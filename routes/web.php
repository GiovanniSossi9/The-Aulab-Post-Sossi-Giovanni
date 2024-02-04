<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/articles/create',[App\Http\Controllers\ArticleController::class, 'create'])->name('articles.create');
Route::post('/article/store',[App\Http\Controllers\ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{article}/show', [App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{category}/index', [App\Http\Controllers\ArticleController::class, 'articlesForCategory'])->name('articles.category');


