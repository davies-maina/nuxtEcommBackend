<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductIndexResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductMoreDetailsResource extends ProductIndexResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array_merge(parent::toArray($request),[
            'variations'=>[]
        ]);
    }
}
