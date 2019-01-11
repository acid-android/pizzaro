<?php

namespace App\Http\Controllers\Order;

use App\Services\Order\OrderService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __invoke(OrderService $orderService, Request $request)
    {
        try {
            $order = $orderService->saveOrder();

            return view('pages.order-received', [
                'model' => $order,
                'order' => unserialize($order->order)
            ]);
        } catch (\Exception $exception) {

        }
    }
}
