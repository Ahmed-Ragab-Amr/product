<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function show($id)
    {
        $cat = Cat::with(['products' , 'categories'])->findOrFail($id);
        $cats = Cat::get();
        $categories = $cat->categories;
        $products = $cat->products;

        return view("showCat" , ['cats'=>$cats , 'categories'=>$categories, 'products'=>$products , 'id'=>$id]);
    }

}
