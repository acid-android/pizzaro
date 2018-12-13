<?php

namespace App\Http\Controllers\Cart;

use App\Models\Item;
use App\Services\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class AddToCartController extends Controller
{

    /**
     * Handle the incoming request.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function __invoke(Request $request)
    {
        /** @var Cart $cart */

        $id = $request->post('id');
        $quantity = $request->post('quantity');

        $items = Item::find($id);

        $cart = App::make('\\' . Cart::class);

        $cart->push($items,$quantity);

        return $cart->getResponse();
    }
}
