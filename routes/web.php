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
Route::get('create', [App\Http\Controllers\CategoryController::class, 'create'])->name('create');