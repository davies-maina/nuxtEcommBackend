<?php

namespace App\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getRouteKeyName(){
        return 'slug';
    }
}
