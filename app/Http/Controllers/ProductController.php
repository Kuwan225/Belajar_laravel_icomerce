<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            "title" => "products",
            "datas" => Product::all()
        ]);
    }
    public function detailProduct($slug)
    {
        return view('product', [
            "title" => "product",
            "product" => Product::find($slug)
        ]);
    }
}
