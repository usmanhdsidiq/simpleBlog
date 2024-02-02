<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Register;
use App\Http\Controllers\Login;
use App\Http\Controllers\Profile;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Article;
use App\Http\Controllers\SocialiteConnect;

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

Route::get('/', [Article::class, 'index'])->name('index');
Route::get('/article/{id}', [Article::class, 'show'])->name('article.show');

//register routes
Route::get('register', [Register::class, 'register'])->name('register');
Route::post('registerAction', [Register::class, 'actionRegister'])->name('actionRegister');

//login routes
Route::get('login', function(){
    return view('login');
});
Route::post('loginAction', [Login::class, 'actionLogin'])->name('actionLogin');

//google redirect
Route::get('login/google/redirect', [SocialiteConnect::class, 'redirect'])->name('redirect');
//google callback
Route::get('login/google/callback', [SocialiteConnect::class, 'callback'])->name('callback');


//admin page
Route::resource('admin', Admin::class)->middleware('auth');
Route::delete('/admin/{admin}', [Admin::class, 'destroy'])->name('admin.destroy')->middleware('auth');
Route::get('/admin/{id}', [Article::class, 'show'])->name('admin.show');
//Route::get('/admin/{admin}', [Admin::class, 'view']);

//profile settings
Route::get('profile', [Profile::class, 'index'])->name('index')->middleware('auth');
Route::get('profile/{id}/edit', [Profile::class, 'edit'])->name('edit');
Route::post('profileupdate/{id}', [Profile::class, 'profileUpdate'])->name('profileUpdate');

Route::get('changeimage', [Profile::class, 'changeImage'])->name('changeImage')->middleware('auth');
Route::post('uploadimage/{id}', [Profile::class, 'uploadImage'])->name('uploadImage');

Route::get('logout', [Login::class, 'logoutAction'])->name('logoutAction');

//middleware
Route::get('/preventaccess', [Profile::class, 'RestrictedPage'])->name('prevent.direct.access');
