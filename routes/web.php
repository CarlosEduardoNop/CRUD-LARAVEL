<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BusinessDiscontController;

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
    return view('index');
});

//Route::prefix('product')
//    ->group(function () {
//        Route::get('/', [
//            ProductController::class,
//            'index'
//        ]);
//
//        Route::get('/create', [
//            ProductController::class,
//            'create'
//        ])
//        ->name('product.create');
//
//        Route::post('/', [
//            ProductController::class,
//            'store'
//        ])
//        ->name('product.store');
//
//        Route::delete('/{id}', [
//            ProductController::class,
//            'destroy'
//        ])
//        ->name('product.destroy');
//
//        Route::get('/{id}/edit', [
//            ProductController::class,
//            'edit'
//        ])
//        ->name('product.edit');
//
//        Route::put('/{id}/update', [
//            ProductController::class,
//            'update'
//        ])
//        ->name('product.update');
//    });

Route::resource('product', ProductController::class);
Route::resource('business_discont', BusinessDiscontController::class);
