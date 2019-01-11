<?php

namespace App\Services\Order;


use App\Models\Order\Order;
use App\Services\Cart;
use App\Services\Customer\AddressService;
use App\Services\Customer\CustomerService;
use Illuminate\Http\Request;

class OrderService
{
    protected $request;

    protected $customerService;
    protected $addressService;

    protected $order;

    protected $cart;

    public function __construct(Request $request, CustomerService $customerService, AddressService $addressService, Order $order, Cart $cart)
    {
        $this->request = $request;
        $this->customerService = $customerService;
        $this->addressService = $addressService;
        $this->order = $order;
        $this->cart = $cart;
    }


    public function saveOrder() : Order
    {
        $customer = $this->customerService->getModel();
        $address = $this->addressService->getModel();

        if(!$customer->save()){
            throw new \Exception("Can't save customer information");
        }

        $address->customer_id = $customer->id;

        if(!$address->save()){
            throw new \Exception("Can't save customer address information");
        }

        $this->order->customer_id = $customer->id;
        $this->order->address_id = $address->id;
        $this->order->order = serialize($this->cart->getCart());
        $this->order->payment = $this->request->post('payment');
        $this->order->status = Order::STATUS_PROCESSING;
        $this->order->notes = $this->request->post('notes');

        if($this->order->save()){
            $this->cart->erase();
            return $this->order;
        } else {
            throw new \Exception("Can't save order");
        }
    }
}