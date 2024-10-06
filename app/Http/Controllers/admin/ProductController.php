<?php

namespace App\Http\Controllers\admin;

use App\Models\Cat;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function show()
    {
        $products = Product::get();
        return view('admin.product.show' , ['products'=>$products]);
    }

    public function create()
    {
        $cats = Cat::get();
        $categories = Category::get();
        return view('admin.product.create' , ["categories"=>$categories , 'cats'=>$cats]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>"required",
            'disc'=>'required',
            'image_path'=>'required',
            'cat_id'=>'required|exists:cats,id',
            'category_id'=>'required|exists:categories,id',
        ]);

        $data = $request->except('image_path');

        $image = $request->file('image_path');
        $path = $image->store('upload_image' , 'uploads');
        $data['image_path'] = $path;

        Product::create($data);

        return redirect()->route('product.show');


    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::get();
        $cats = Cat::get();
        return view('admin.product.edit' , ['product'=>$product , 'categories'=>$categories , 'cats'=>$cats]);
    }

    public function update(Request $request , $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name'=>'required',
            'disc'=>'required',
            'price'=>'required',
            'cat_id'=>'required|exists:cats,id',
            'category_id'=>'required|exists:categories,id',
        ]);

        $data = $request->except('image_path');

        $old_image = $product->image_path;

        if($request->hasFile('image_path'))
        {
            Storage::disk('uploads')->delete($old_image);

            $new_image = $request->file('image_path');
            $path = $new_image->store('upload_image' , 'uploads');
            $data['image_path'] = $path;
        }

        $product->update($data);
        return redirect()->route('product.show');


    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $image = $product->image_path;

        $product->delete();

        Storage::disk('uploads')->delete($image);
        return redirect()->back();

    }
}
