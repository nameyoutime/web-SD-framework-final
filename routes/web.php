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

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth','role:editor,admin,viewer']);

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth','role:editor,admin,viewer'])->name('dashboard');

Route::resource('users', \App\Http\Controllers\UserController::class)->middleware(['auth','role:admin']);;
Route::resource('orders', \App\Http\Controllers\OrderController::class)->middleware(['auth','role:editor,admin']);;
Route::resource('profiles', \App\Http\Controllers\ProfileController::class)->middleware(['auth','role:editor,admin']);;
Route::resource('articles', \App\Http\Controllers\ArticleController::class)->middleware(['auth','role:editor,admin']);;
Route::resource('products', \App\Http\Controllers\ProductController::class)->middleware(['auth','role:editor,admin']);;
Route::resource('categories', \App\Http\Controllers\CategoriesController::class)->middleware(['auth','role:editor,admin']);;

Route::post('orders/{id}/{status}', [\App\Http\Controllers\OrderController::class, 'changeStatus'])->middleware(['auth','role:editor,admin']);;
Route::post('orders/dateTo', [\App\Http\Controllers\OrderController::class,'dateTo'])->name('dateTo')->middleware(['auth','role:editor,admin']);;

Route::post('users/{id}/deactive', [\App\Http\Controllers\UserController::class, 'deactive'])->middleware(['auth','role:editor,admin']);;
Route::post('users/{id}/active', [\App\Http\Controllers\UserController::class, 'active'])->middleware(['auth','role:editor,admin']);;




require __DIR__.'/auth.php';
