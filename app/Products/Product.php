<?php

namespace App\Products;

use App\Scoping\Scoper;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    public function getRouteKeyName(){
        return 'slug';
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product', 'product_id', 'category_id');
    }

    public function scopeWithScopes(Builder $builder,$scopes=[]){
        return (new Scoper(request()))->apply($builder,$scopes);
}
}
