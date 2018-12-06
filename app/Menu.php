<?php

namespace App;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
