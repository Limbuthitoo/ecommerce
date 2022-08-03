<?php

use App\Http\Controllers\Backend\AdsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\UnitController;
use App\Http\Controllers\Frontend\PageController;
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

Route::get('/', [PageController::class,'home']);
Route::get('/product/category/{id}', [PageController::class,'productCategory']);
Route::get('/product/{id}', [PageController::class,'productDetail']);
Route::get('cart', [PageController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [PageController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [PageController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [PageController::class, 'remove'])->name('remove.from.cart');




Route::get('/dashboard', function () {
    return view('admin.app');
})->middleware(['auth','admin'])->name('admin');

Route::get('/home',[PageController::class,'home'])->middleware(['auth','customer'])->name('user');

require __DIR__.'/auth.php';


Route::middleware(['admin'])->group(function(){
    Route::resource('/company',CompanyController::class);
    Route::resource('/category',CategoryController::class);
    Route::resource('/product',ProductController::class);
    Route::resource('/unit',UnitController::class);
    Route::resource('/ads',AdsController::class);
});

Route::middleware(['customer'])->group(function(){

});

