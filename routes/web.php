<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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
Route::get('/category/{id}', [App\Http\Controllers\PostController::class, 'category'])->name('category');

Route::post('/posts/store', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::get('imagecreate', [ImageController::class,'create'])->name('imagecreate');

Route::post('/image/store', [App\Http\Controllers\ImageController::class, 'store'])->name('image.store');
