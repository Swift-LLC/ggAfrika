<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\isAdmin;

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

// Route::get('/', function () {
//     return view('');
// })->name('index');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();




Route::get('/blog/{post}', [App\Http\Controllers\PostsController::class, 'show'])->name('show');
Route::get('/category/{category}', [App\Http\Controllers\PostsController::class, 'showcat'])->name('showcat');


//Admin
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin')->middleware('auth');
Route::get('/admin/all-editor', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('editors')->middleware('auth');


//shows create post form
Route::get('/admin/blog/create/post', [App\Http\Controllers\PostsController::class, 'create'])->name('create')->middleware('auth');
//saves the created post to thed database
Route::post('/admin/store', [App\Http\Controllers\PostsController::class, 'store'])->name('store')->middleware('auth');
//shows edit post form
Route::get('/admin/edit/{post}', [App\Http\Controllers\PostsController::class, 'edit'])->name('edit')->middleware('auth');
//commits edit posts to the database
Route::put('/admin/blog/{post}', [App\Http\Controllers\PostsController::class, 'update'])->name('update')->middleware('auth');

Route::delete('/admin/delete/{post}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('delete')->middleware('auth');
//delete posts from database
Route::post('/admin/store/post', [App\Http\Controllers\CategoryController::class, 'store'])->name('cat')->middleware('auth');
//show posts 
Route::get('/admin/posts', [App\Http\Controllers\Admin\PostController::class, 'showPosts'])->name('posts')->middleware('auth');
//publish posts to frontend
Route::put('/blog/{post}/publish', [App\Http\Controllers\PostsController::class, 'publish'])->name('publish')->middleware('auth');
Route::put('/video/{post}/publish', [App\Http\Controllers\VideoController::class, 'publish'])->name('v_publish')->middleware('auth');





// Route::get('/admin/videos', [App\Http\Controllers\HomeController::class, 'videos'])->name('allvideos')->middleware(isAdmin::class);
Route::post('/admin/store/video', [App\Http\Controllers\VideoController::class, 'store'])->name('store_video')->middleware('auth');
Route::get('/admin/video', [App\Http\Controllers\VideoController::class, 'index'])->name('allvideos')->middleware('auth');
