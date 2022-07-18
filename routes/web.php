<?php

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


Route::get('/dashboard', function () {
    return view('admin.app');
})->middleware(['auth','admin'])->name('admin');

Route::get('/user',function(){
    return view('frontend.pages.home');
})->middleware(['auth','customer'])->name('user');

require __DIR__.'/auth.php';


Route::middleware(['','admin'])->group(function(){
    Route::resource('/company',CompanyController::class);
    Route::resource('/category',CategoryController::class);
    Route::resource('/product',ProductController::class);
    Route::resource('/unit',UnitController::class);
});

