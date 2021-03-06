<?php

namespace App\Http\Controllers\Products;

use App\Products\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Scoping\Scopes\CategoryScope;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductMoreDetailsResource;

class ProductsController extends Controller
{
    public function index(){
        $products=Product::withScopes($this->scopes())->paginate(10);

        return ProductIndexResource::collection($products);
        
    }

    public function show(Product $product){
        return new ProductMoreDetailsResource(
            $product
        );
    }

    protected function scopes(){
        return [
            'category'=>new CategoryScope()
        ];
    }
}
