<?php
namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait isOrderable{
     public function scopeOrdered(Builder $builder, $direction='asc'){

        $this->orderBy('order',$direction);
    }
}