<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('category','CategoryController');

Route::get('/add-post', [PostController::class, 'addPost'])->name('post.add');
Route::post('/add-post', [PostController::class, 'savePost'])->name('save.post');

Route::get('/post-list', [PostController::class, 'postList'])->name('post.list');
Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('post.edit');
Route::get('/delete-post/{id}', [PostController::class, 'deletePost'])->name('post.delete');

Route::post('/update-post', [PostController::class, 'updatePost'])->name('update.post');

