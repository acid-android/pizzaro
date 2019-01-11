<?php

namespace App\Http\Controllers\Admin\Order;

use App\Models\Order\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $orders = Order::all();

        return view('admin.order.index', [
            'orders' => $orders
        ]);
    }
}
