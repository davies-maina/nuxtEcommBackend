<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model
{
    public function children(){
        return $this->hasMany(Category::class, 'parent_id', 'id'); //Category class has many categories(subcategories, really)
        
    }

    public function scopeParents(Builder $builder){

        $builder->whereNull('parent_id'); 

    } //prent category has no parent id hence null. This function only grabs the parent categories and not children

    public function scopeOrdered(Builder $builder, $direction='asc'){

        $this->orderBy('order',$direction);
    }
}
