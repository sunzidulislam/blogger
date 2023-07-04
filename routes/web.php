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
Route::redirect('/','/home');


Auth::routes();g


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('admin.index');


Route::get('/admin/posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/admin/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/admin/posts/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/admin/posts/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::put('/admin/posts/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
Route::delete('/admin/posts/delete/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.delete');


Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index')->middleware('auth');
Route::get('/admin/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create')->middleware('auth');
Route::post('/admin/categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store')->middleware('auth');
Route::get('/admin/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit')->middleware('auth');
Route::put('/admin/categories/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update')->middleware('auth');
Route::delete('/admin/categories/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete')->middleware('auth');

Route::get('/admin/settings/create', [App\Http\Controllers\HomeController::class, 'settingsCreate'])->name('settings.create')->middleware('auth');
Route::post('/admin/settings/store', [App\Http\Controllers\HomeController::class, 'settingsStore'])->name('settings.store')->middleware('auth');


Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/aboutUs', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('aboutUs');

Route::get('single/post/{id}', [App\Http\Controllers\PostController::class, 'singlePost'])->name('single.post');
Route::post('comment/post/]{id}', [App\Http\Controllers\PostController::class, 'comment'])->name('post.comment');
