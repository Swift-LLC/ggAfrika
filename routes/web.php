<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\isAdmin;
use App\Http\Controllers\SlideController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\FbController;
use App\Http\Controllers\GoogleController;

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

Auth::routes(['auth' => true, 'verify' => true]);

//-Facebook Login---------------------------------------------------------------------------------------------------------------------
Route::get('auth/facebook', [FbController::class, 'redirectToFacebook']);

Route::get('auth/facebook/callback', [FbController::class, 'facebookSignin']);

//-Google Signin ---------------------------------------------------------------------------------------------------------------------
  
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'googleSignin']);

//-Email Verifiation---------------------------------------------------------------------------------------------------------------------

Route::get('/email-verification/error', 'Auth\VerificationController@error')->name('email-verification.error');


Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

 
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Static Routes---------------------------------------------------------------------------------------------------------------------
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name(
    'home'
);

Route::get('/about', [
    App\Http\Controllers\HomeController::class,
    'about',
])->name('about');
Route::get('/terms', [
    App\Http\Controllers\HomeController::class,
    'terms',
])->name('terms');
Route::get('/policy', [
    App\Http\Controllers\HomeController::class,
    'policy',
])->name('policy');
Route::get('/support', [
    App\Http\Controllers\HomeController::class,
    'support',
])->name('support');
Route::get('/advertising', [
    App\Http\Controllers\HomeController::class,
    'advertising',
])->name('advertising');
Route::get('/documentation', [
    App\Http\Controllers\HomeController::class,
    'doc',
])->name('doc');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'adminHome'])
    ->name('admin')
    ->middleware('auth');

//EDITORS---------------------------------------------------------------------------------------------------------------------
Route::get('/all-editors', [
    App\Http\Controllers\HomeController::class,
    'alleditors',
])
    ->name('editors')
    ->middleware('auth');
Route::get('/editors/create', [
    App\Http\Controllers\Auth\RegisterController::class,
    'show',
])
    ->name('createform')
    ->middleware('auth');
Route::get('/editors/edit/{id}', [
    App\Http\Controllers\Auth\RegisterController::class,
    'updateform',
])
    ->name('updateform')
    ->middleware('auth');
Route::put('/editors/update/{id}', [
    App\Http\Controllers\Auth\RegisterController::class,
    'update',
])
    ->name('updateUser')
    ->middleware('auth');
Route::delete('/editors/delete/{user}', [
    App\Http\Controllers\Auth\RegisterController::class,
    'destroy',
])
    ->name('deleteUser')
    ->middleware('auth');

//CATEGORY---------------------------------------------------------------------------------------------------------------------
Route::get('/category/{id}/{category}', [
    App\Http\Controllers\CategoryController::class,
    'showcat',
])->name('showcat');
Route::get('/blog-categories', [
    App\Http\Controllers\CategoryController::class,
    'index',
])
    ->name('category')
    ->middleware('auth');

Route::get('/category/new', [
    App\Http\Controllers\CategoryController::class,
    'create',
])
    ->name('createCategory')
    ->middleware('auth');
Route::post('/create/category', [
    App\Http\Controllers\CategoryController::class,
    'store',
])
    ->name('newCat')
    ->middleware('auth');
Route::delete('/delete/category/{cat}', [
    App\Http\Controllers\CategoryController::class,
    'destroy',
])
    ->name('deleteCategory')
    ->middleware('auth');

//BLOG
Route::get('/blog/{post}', [
    App\Http\Controllers\PostsController::class,
    'show',
])->name('show');
Route::get('/blog-posts', [
    App\Http\Controllers\PostsController::class,
    'showPosts',
])
    ->name('posts')
    ->middleware('auth');
Route::get('/blog/edit/{post}', [
    App\Http\Controllers\PostsController::class,
    'edit',
])
    ->name('edit')
    ->middleware('auth');
Route::post('/admin/store', [
    App\Http\Controllers\PostsController::class,
    'store',
])
    ->name('store')
    ->middleware('auth');
Route::get('/create/blog', [
    App\Http\Controllers\PostsController::class,
    'create',
])
    ->name('create')
    ->middleware('auth');
Route::put('/blog/publish/{post}', [
    App\Http\Controllers\PostsController::class,
    'publish',
])
    ->name('publish')
    ->middleware('auth');
Route::put('/admin/blog/{post}', [
    App\Http\Controllers\PostsController::class,
    'update',
])
    ->name('update')
    ->middleware('auth');
Route::delete('/admin/delete/{post}', [
    App\Http\Controllers\PostsController::class,
    'destroy',
])
    ->name('delete')
    ->middleware('auth');

//VIDEOS

Route::post('/store/video', [
    App\Http\Controllers\VideoController::class,
    'store',
])
    ->name('store_video')
    ->middleware('auth');
Route::get('/videos', [
    App\Http\Controllers\VideoController::class,
    'index',
])
    ->name('allvideos')
    ->middleware('auth');
Route::get('/videos/create', [
    App\Http\Controllers\VideoController::class,
    'create',
])
    ->name('createvideo')
    ->middleware('auth');
Route::delete('/admin/video/delete/{video}', [
    App\Http\Controllers\VideoController::class,
    'destroy',
])
    ->name('delete_video')
    ->middleware('auth');
Route::put('/admin/video/{post}/remove', [
    App\Http\Controllers\VideoController::class,
    'publish',
])
    ->name('v_publish')
    ->middleware('auth');

//SLIDES
Route::get('/all-slides', [SlideController::class, 'index'])
    ->name('slides')
    ->middleware('auth');
Route::get('/slide/new', [SlideController::class, 'create'])
    ->name('newSlide')
    ->middleware('auth');
Route::post('/slide/create', [SlideController::class, 'store'])
    ->name('createSlide')
    ->middleware('auth');
Route::delete('/slide/delete/{slide}', [SlideController::class, 'destroy'])
    ->name('deleteSlide')
    ->middleware('auth');
Route::put('/slide/publish/{slide}', [
    App\Http\Controllers\SlideController::class,
    'publish',
])
    ->name('s_publish')
    ->middleware('auth');


    Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
    Route::get('/callback', 'Auth\LoginController@handleProviderCallback');