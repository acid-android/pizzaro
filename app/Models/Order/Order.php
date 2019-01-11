<?php

namespace App\Models\Order;

use App\Models\Customer\Address;
use App\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public const STATUS_PROCESSING = 1;
    public const STATUS_SENT = 2;
    public const STATUS_FINISH = 3;


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
