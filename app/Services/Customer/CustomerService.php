<?php

namespace App\Services\Customer;


use App\Models\Customer\Customer;
use Illuminate\Http\Request;

class CustomerService
{
    /** @var Customer  */
    protected $customer;

    /** @var Request */
    protected $request;


    public function __construct(Customer $customer, Request $request)
    {
        $this->customer = $customer;
        $this->request = $request;

        $this->setModel();
    }

    public function validateCustomer()
    {
        return $this->request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);
    }

    protected function setModel() : void
    {
        if($customer = Customer::where('email', $this->request->post('email'))->first()){
            $this->customer = $customer;
        } else {
            $post = $this->request->post();
            $this->customer->first_name = $post['first_name'];
            $this->customer->last_name = $post['last_name'];
            $this->customer->email = $post['email'];
        }
    }

    public function getModel() : Customer
    {
        return $this->customer;
    }

}