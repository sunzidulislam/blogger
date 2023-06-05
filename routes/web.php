<?php

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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::post('/posts/create', [App\Http\Controllers\PostController::class, 'store'])->name('post.create');
Route::get('/posts/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::put('/posts/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
Route::put('/posts/delete/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.delete');