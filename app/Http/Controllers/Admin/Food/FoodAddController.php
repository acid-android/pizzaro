<?php

namespace App\Http\Controllers\Admin\Food;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodAddController extends Controller
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
        return view('admin.food.add');
    }
}
