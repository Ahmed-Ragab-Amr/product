<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::with('products')->findOrFail($id);
        $products = $category->products;

        return view("showCategory" , ['products'=>$products]);
    }
}
