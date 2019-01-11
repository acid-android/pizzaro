<?php

namespace App\Services\Customer;


use App\Models\Customer\Address;
use Illuminate\Http\Request;

class AddressService
{
    protected $address;
    protected $request;

    public function __construct(Address $address, Request $request)
    {
        $this->address = $address;
        $this->request = $request;

        $this->setModel();
    }

    protected function setModel() : void
    {
        $post = $this->request->post();

        $this->address->street = $post['street'];
        $this->address->apartment = $post['apartment'];
    }

    public function getModel() : Address
    {
        return $this->address;
    }

}