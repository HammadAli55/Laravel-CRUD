<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/add-post', [PostController::class, 'addPost']) -> name('post.add');
Route::post('/add-post', [PostController::class, 'savePost']) -> name('save.post');

Route::get('/post-list', [PostController::class, 'postList']) -> name('post.list');
Route::get('/edit-post/{id}', [PostController::class, 'editPost']) -> name('post.edit');
Route::get('/delete-post/{id}', [PostController::class, 'deletePost']) -> name('post.delete');

Route::post('/update-post', [PostController::class, 'updatePost']) -> name('update.post');


