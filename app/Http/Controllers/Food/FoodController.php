<?php

namespace App\Http\Controllers\Food;

use App\Menu;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $key)
    {
        $menu = Menu::where('key', $key)->first();
        $products = $menu->products;


//        dd($products);
//
//        dd($key);
        return view('pages.food', [
            'products' => $products
        ]);
    }
}
