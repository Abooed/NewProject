<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('home',[HomeController::class,'index'])->name('index');
Route::get('create',[ProductController::class,'create'])->name('create');
Route::get('products',[ProductController::class,'index'])->name('index');
Route::get('admin',[ProductController::class,'index'])->name('index');
Route::get('profile',[HomeController::class,'profile'])->name('profile');
Route::get('books',[ProductController::class,'index_book'])->name('index_book');
Route::get('orders',[ProductController::class,'index_order'])->name('index_order');
Route::get('users',[ProductController::class,'index_user'])->name('index_user');

Route::post('store',[ProductController::class,'store'])->name('store');

Route::post('destroy/{id}',[ProductController::class,'destroy'])->name('destroy');
Route::post('destroyOrder/{id}',[ProductController::class,'destroy_order'])->name('destroyOrder');

Route::post('updatedata/{id}',[ProductController::class,'updatedata'])->name('updatedata');

Route::put('update/{id}',[ProductController::class,'update'])->name('update');

Route::get('order/{id}',[HomeController::class,'order'])->name('order')->middleware('auth');



Route::post('book/store',[HomeController::class, 'store'])->name('homestore');
Route::get('product/{id}',[ProductController::class, 'show'])->name('show');
