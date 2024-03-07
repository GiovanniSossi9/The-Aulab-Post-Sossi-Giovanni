<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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
Route::post('/articles/store',[App\Http\Controllers\ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{article}/show', [App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{category}/index', [App\Http\Controllers\ArticleController::class, 'articlesForCategory'])->name('articles.category');

Route::get('/work-with-us',[App\Http\Controllers\PublicController::class, 'workWithUs'])->name('work.with.us');
Route::post('/user/send-role-request',[App\Http\Controllers\PublicController::class, 'sendRoleRequest'])->name('user.role.request');

Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/{user}/set-revisor', [AApp\Http\Controllers\AdminController::class, 'makeUserRevisor'])->name('admin.makeUserRevisor');
    Route::get('/admin/{user}/set-admin', [App\Http\Controllers\AdminController::class, 'makeUserAdmin'])->name('admin.makeUserAdmin');
    Route::get('/admin/{user}/set-writer', [App\Http\Controllers\AdminController::class, 'makeUserWriter'])->name('admin.makeUserWriter');
    Route::post('/tag/{tag}/update', [App\Http\Controllers\AdminController::class, 'editTag'])->name('tag.edit');
    Route::delete('/tag/{tag}/delete', [App\Http\Controllers\AdminController::class, 'deleteTag'])->name('tag.delete');
    Route::post('/tag/store', [App\Http\Controllers\AdminController::class, 'storeTag'])->name('tag.store');
});

Route::middleware('writer')->group(function(){
    Route::get('/article/create',[App\Http\Controllers\ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store',[App\Http\Controllers\ArticleController::class, 'store'])->name('article.store');
});

Route::middleware('revisor')->group(function(){
    Route::get('/revisor/dashboard', [App\Http\Controllers\RevisorController::class, 'revisorDashboard'])->name('revisor.dashboard');
    Route::get('/revisor/article/{article}/detail',[App\Http\Controllers\RevisorController::class, 'articleDetail'])->name('revisor.detail');
    Route::get('/revisor/article/{article}/accept',[App\Http\Controllers\RevisorController::class, 'acceptArticle'])->name('revisor.accept');
    Route::get('/revisor/article/{article}/reject', [App\Http\Controllers\RevisorController::class, 'rejectArticle'])->name('revisor.reject');
});

