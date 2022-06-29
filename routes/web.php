<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/product-detail', [HomeController::class,'detail'])->name('product.detail');
Route::get('/product-detail/{id}', [HomeController::class, 'detail'])->name('detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('Dashboard');


    Route::get('/add-product', [ProductController::class,'addProduct'])->name('add.product');

    Route::post('/create-product', [ProductController::class,'create'])->name('product.create');
    Route::get('/manage-product', [ProductController::class,'manageProduct'])->name('manage.product');

    //update work call two route
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('product.update');
    //
    //Delete
    Route::get('/delete-product/{id}', [ProductController::class,'delete'])->name('product.delete');
});
