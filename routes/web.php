<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'show_post'])->name('home');



Route::get('/post',[PostController::class, 'index'])->middleware(['auth'])->name('post_index');

Route::post('/post',[PostController::class, 'create'])->middleware(['auth'])->name('post_create');



Route::get('/dashboard',[DashboardController::class, 'show_post'])->middleware(['auth'])->name('dashboard');

Route::put('/post/edit/{id}', [PostController::class, 'update'])->middleware(['auth'])->name('post
_update');

Route::get('/post/delete/{id}',[PostController::class, 'destroy'])->middleware(['auth'])->name('post_destroy');

require __DIR__.'/auth.php';
