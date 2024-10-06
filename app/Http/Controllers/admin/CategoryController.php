<?php

namespace App\Http\Controllers\admin;

use App\Models\Cat;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show()
    {
        $categories = Category::get();
        return view('admin.category.show' , ['categories'=>$categories]);
    }


    public function getCategoriesByCat($cat_id) {
        $categories = Category::where('cat_id', $cat_id)->get();
        return response()->json($categories);
    }

    public function create()
    {
        $cats = Cat::get();

        return view('admin.category.create' , ["cats"=>$cats]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'cat_id'=>"required|exists:cats,id",
        ]);

        Category::create($request->all());

        return redirect()->route('category.show');

    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $cats = Cat::get();
        return view('admin.category.edit' , ['category'=>$category , 'cats'=>$cats]);
    }

    public function update(Request $request , $id)
    {
        $category = Category::findOrFail($id);
        $request->validate([
            'name'=>'required',
            'cat_id'=>'required|exists:cats,id',
        ]);

        $category->update($request->all());
        return redirect()->route('category.show');

    }

    public function delete($id)
    {
        Category::destroy($id);
        return redirect()->back();
    }
}
