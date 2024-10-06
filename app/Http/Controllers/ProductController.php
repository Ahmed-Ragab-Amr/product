<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $cats = Cat::get();
        $categories = Category::get();
        $products = Product::get();
        return view("home" , ['cats'=>$cats , 'categories'=>$categories , 'products'=>$products]);
    }

    public function showOne($id)
    {
        $product = Product::findOrFail($id);

        return view('showOne' , ['product'=>$product]);
    }
}
