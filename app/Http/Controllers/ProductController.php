<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function get($id){
        $product = Product::join('images','products.id','=','images.product_id')->get(['products.*','images.url'])->find($id);

        return view("product",["product" => $product]);
    }
}
