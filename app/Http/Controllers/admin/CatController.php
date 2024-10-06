<?php

namespace App\Http\Controllers\admin;

use App\Models\Cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    public function show()
    {
        $cats = Cat::get();
        return view('admin.cat.show' , ['cats'=>$cats]);
    }


 

    public function create()
    {

        return view('admin.cat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        Cat::create($request->all());

        return redirect()->route('cats.show');

    }

    public function edit($id)
    {
        $cat = Cat::findOrFail($id);
        return view('admin.cat.edit' , ['cat'=>$cat]);
    }

    public function update(Request $request , $id)
    {
        $cat = Cat::findOrFail($id);
        $request->validate([
            'name'=>'required',
        ]);

        $cat->update($request->all());
        return redirect()->route('cats.show');

    }

    public function delete($id)
    {
        Cat::destroy($id);
        return redirect()->back();
    }
}
