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


//App::bind('\\' . \App\Services\Cart::class, function (){
//    return new \App\Services\Cart();
//});



Route::get('/', function (\Illuminate\Http\Request $request) {
    return view('pages.index');
})->name('home');

Route::get('/food/{key}', "\\" .\App\Http\Controllers\Food\FoodController::class)->name('food');

Route::get('/food', function () {
    return view('pages.food');
})->name('food.all');

Route::get('/product/{key}', "\\" . \App\Http\Controllers\Product\ProductController::class)->name('product');

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

Route::post('/order-received', 'Order\OrderController')->name('order-received');


Route::get('/send-email-to-subscriber', function (\Illuminate\Http\Request $request) {
//    \Illuminate\Support\Facades\Mail::to('murdoc50@gmail.com')->send(new \App\Mail\UserSubscribedEmail());
    $mailController = new \App\Http\Controllers\Mail\SubscriptionController();
    return $mailController($request);
})->name('send-email-to-subscriber');

//Route::get('/add-to-cart/{id}', "\\" . \App\Http\Controllers\Cart\AddToCartController::class)->name('api-add-to-cart');
Auth::routes();

Route::get('/admin', 'Admin\HomeController@index')->name('admin-home');

Route::get('/admin/food', 'Admin\Food\FoodController')->name('admin-food');

Route::get('/admin/food/add', 'Admin\Food\FoodAddController')->name('admin-food-add');

Route::post('/admin/food/add', 'Admin\Food\FoodAddHandlerController')->name('admin-food-add');

Route::get('/admin/food/remove/{id}', 'Admin\Food\FoodRemoveController')->name('admin-food-remove');

Route::get('/admin/food/update/{id}', 'Admin\Food\FoodUpdateController')->name('admin-food-update');

Route::post('/admin/food/update/{id}', 'Admin\Food\FoodUpdateController@store')->name('admin-food-update-post');

Route::get('/admin/menu', 'Admin\Menu\MenuController')->name('admin-menu');

Route::get('/admin/menu/add', 'Admin\Menu\MenuAddController')->name('admin-menu-add');
Route::post('/admin/menu/add', 'Admin\Menu\MenuAddHandlerController')->name('admin-menu-add-handler');
Route::get('/admin/menu/update/{id}', 'Admin\Menu\MenuUpdateController')->name('admin-menu-update');
Route::post('/admin/menu/update/{id}', 'Admin\Menu\MenuUpdateController@store')->name('admin-menu-update-post');
Route::get('/admin/menu/remove/{id}', 'Admin\Menu\MenuRemoveController')->name('admin-menu-remove');

Route::get('/admin/orders', 'Admin\Order\OrderController')->name('admin-orders');