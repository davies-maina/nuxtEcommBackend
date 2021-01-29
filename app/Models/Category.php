<?php

namespace App\Models;

use App\Products\Product;
use App\Models\Traits\HasChildren;
use App\Models\Traits\IsOrderable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasChildren,IsOrderable;
    
    protected $fillable=[
        'name','slug','order'
    ];

    public function children(){
        return $this->hasMany(Category::class, 'parent_id', 'id'); //Category class has many categories(subcategories, really)
        
    }


  public function products()
  {
      return $this->belongsToMany(Product::class, 'category_product', 'category_id', 'product_id');
  }

 

   
}
