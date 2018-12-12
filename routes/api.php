<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::post('/cart/add', "\\" . \App\Http\Controllers\Cart\AddToCartController::class)->name('api-add-to-cart');

Route::post('/cart/increase', "\\" . \App\Http\Controllers\Cart\IncreaseItemController::class)->name('api-cart-increase');

Route::post('/cart/decrease', "\\" . \App\Http\Controllers\Cart\DecreaseItemController::class)->name('api-cart-decrease');

Route::post('/cart/remove', "\\" . \App\Http\Controllers\Cart\RemoveItemController  ::class)->name('api-cart-decrease');

