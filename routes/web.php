<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/work-with-us',[PublicController::class, 'workWithUs'])->name('work.with.us');
Route::post('/user/send-role-request',[PublicController::class, 'sendRoleRequest'])->name('user.role.request');
Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/{user}/set-revisor', [AdminController::class, 'makeUserRevisor'])->name('admin.makeUserRevisor');
    Route::get('/admin/{user}/set-admin', [AdminController::class, 'makeUserAdmin'])->name('admin.makeUserAdmin');
    Route::get('/admin/{user}/set-writer', [AdminController::class, 'makeUserWriter'])->name('admin.makeUserWriter');
});

Route::middleware('writer')->group(function(){
    Route::get('/article/create',[ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store',[ArticleController::class, 'store'])->name('article.store');
});

