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


Route::get('/set-products', function (){
    $faker = Faker\Factory::create();
    $result = [];
    $types = \App\Menu::all();
    $products = \App\Models\Product::all();
    $length = [
        [9, 'Пицца', 'pizza'],
        [9, 'Бургер', 'burger'],
        [8, 'Салат', 'salad'],
        [8, 'Тако', 'taco'],
        [6, 'Шаурма', 'wrap'],
        [3, 'Фри', 'fri'],
        [11, 'Напиток', 'drink'],
    ];

    $offset = 0;

    foreach ($types as $index => $type) {
        for($i = $offset; $i < $offset + $length[$index][0]; $i++){
            $result[] = [$type->name . ' => '. $products[$i]->name];
            $type->products()->attach($products[$i]->id);
//        $name = $length[$index][1];

//        for ($i = 1; $i <= $length[$index][0]; $i++)
//        {
//            $productName = $name . ' ' . $i;
//            $key = $length[$index][2] . '-' . $i;
//            $image = '/images/' . $type->key . '/' . $i . '.jpg';
//            $description = $faker->realText(190);
//
//
////            $product = new \App\Models\Product();
////            $product->name = $productName;
////            $product->description = $description;
////            $product->image = $image;
////            $product->key = $key;
////
////            $product->save();
//
//            $result[] = [$productName, $key, $image, $description];
        }
        $offset += $length[$index][0];
    }

    return $result;
});