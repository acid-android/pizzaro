<?php

namespace App\Http\Controllers\Admin\Food;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $products = Product::all();
        return view('admin.food.index', [
            'products' => $products
        ]);
    }
}
