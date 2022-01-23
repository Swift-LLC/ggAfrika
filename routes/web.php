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

Route::get('/', function () {
    return view('admin.video');
})->name('index');




Auth::routes();


Route::get('/blog', [App\Http\Controllers\PostsController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [App\Http\Controllers\PostsController::class, 'show'])->name('show');
Route::get('/category/{category}', [App\Http\Controllers\PostsController::class, 'showcat'])->name('showcat');



//Admin
Route::get('/admin/calendar', function () {
    return view('admin.calendar');
})->name('calendar')->middleware('is_admin');
Route::get('/blog/create/post', [App\Http\Controllers\PostsController::class, 'create'])->name('create')->middleware(isAdmin::class);//shows create post form
Route::post('/store', [App\Http\Controllers\PostsController::class, 'store'])->name('store')->middleware('is_admin');//saves the created post to thed database
Route::get('/{post}/edit', [App\Http\Controllers\PostsController::class, 'edit'])->name('edit')->middleware('is_admin');//shows edit post form
Route::put('/blog/{post}/post', [App\Http\Controllers\PostsController::class, 'update'])->name('update')->middleware('is_admin');//commits edit posts to the database
Route::delete('/delete/{post}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('delete')->middleware('is_admin');//delete posts from database
Route::post('/store/post', [App\Http\Controllers\CategoryController::class, 'store'])->name('cat')->middleware('is_admin');
Route::get('/posts', [App\Http\Controllers\Admin\PostController::class, 'showPosts'])->name('posts')->middleware('is_admin');
Route::put('/blog/{post}/publish', [App\Http\Controllers\PostsController::class, 'publish'])->name('publish')->middleware('is_admin');
Route::put('/video/{post}/publish', [App\Http\Controllers\VideoController::class, 'publish'])->name('v_publish')->middleware('is_admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin');
// Route::get('/admin/videos', [App\Http\Controllers\HomeController::class, 'videos'])->name('allvideos')->middleware(isAdmin::class);
Route::post('/store/video', [App\Http\Controllers\VideoController::class, 'store'])->name('store_video');
Route::get('/video', [App\Http\Controllers\VideoController::class, 'index'])->name('allvideos');