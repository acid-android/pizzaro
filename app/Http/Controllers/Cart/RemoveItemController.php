<?php

namespace App\Http\Controllers\Cart;

use App\Services\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class RemoveItemController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        /** @var Cart $cart */

        $id = $request->post('id');

        $cart = App::make('\\' . Cart::class);

        $cart->removeItem($id);

        return $cart->getResponse();
    }
}
