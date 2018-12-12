<?php

namespace App\Http\Controllers\Food;

use App\Menu;
use App\Models\Product;
use App\Services\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

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
        $products = $menu->products()->paginate(6);

//        dd(App::make('\\' . Cart::class));

        return view('pages.food', [
            'products' => $products
        ]);
    }
}
