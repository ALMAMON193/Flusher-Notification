<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/post',[PostController::class,'index'])->name('post.index');
Route::get('post/create',[PostController::class,'create'])->name('post.create');
Route::post('post/store', [PostController::class, 'store'])->name('post.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
