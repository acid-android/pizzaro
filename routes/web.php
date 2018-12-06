<?php

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

Route::get('/', function (\Illuminate\Http\Request $request) {
    return view('pages.index');
})->name('home');

Route::get('/food/{key}', "\\" .\App\Http\Controllers\Food\FoodController::class)->name('food');

Route::get('/food', function () {
    return view('pages.food');
})->name('food.all');

Route::get('/product', function () {
    return view('pages.product');
})->name('product');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/article', function () {
    return view('pages.article');
})->name('article');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/error', function () {
    return view('pages.error');
})->name('error');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/track', function () {
    return view('pages.track');
})->name('track');

Route::get('/store-locator', function () {
    return view('pages.store-locator');
})->name('store-locator');

Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');

Route::get('/order-received', function () {
    return view('pages.order-received');
})->name('order-received');


Route::get('/send-email-to-subscriber', function (\Illuminate\Http\Request $request) {
//    \Illuminate\Support\Facades\Mail::to('murdoc50@gmail.com')->send(new \App\Mail\UserSubscribedEmail());
    $mailController = new \App\Http\Controllers\Mail\SubscriptionController();
    return $mailController($request);
})->name('send-email-to-subscriber');