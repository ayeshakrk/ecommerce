<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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
Route::get('homepage' , [App\Http\Controllers\FrontendController::class, 'index'])->name('homepage');
// backend  admin routes
Route::get('dashboard' , [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::POST('category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('category.edit{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::POST('category/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
Route::get('category/delete{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');