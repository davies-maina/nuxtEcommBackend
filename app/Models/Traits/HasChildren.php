<?php


namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
    
trait HasChildren{
    public function scopeParents(Builder $builder){

        $builder->whereNull('parent_id'); 

    } //parent category has no parent id hence null. This function only grabs the parent categories and not children
}