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


Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('admin.index')->middleware('auth');

Route::get('/admin/posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/admin/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/admin/posts/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/admin/posts/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::put('/admin/posts/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
Route::delete('/admin/posts/delete/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.delete');


Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::get('/admin/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('/admin/categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('/admin/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::put('/admin/categories/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
Route::delete('/admin/categories/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');

