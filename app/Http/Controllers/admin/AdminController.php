<?php

namespace App\Http\Controllers\admin;

use App\Models\Cat;
use Illuminate\Validation\Rules;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function home()
    {
        $cats = Cat::get();
        $categories = Category::get();
        $products = Product::get();
        return view('admin.home' , ['cats'=>$cats , 'categories'=>$categories , 'products'=>$products]);
    }


    public function add()
    {
        return view('admin.add');
    }

    public function show()
    {
        return view('admin.show');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = User::where('email' , $request->email)->first();

        if(!$user)
        {
            return redirect()->back()->with(['email_error'=>'User Not Found']);
        }



        if(Hash::check($request->password, $user->password))
        {
            Auth::login($user);
            return redirect()->route('admin.home');
        }

        return redirect()->back()->with(['pass_error'=>'password is incorrect']);


    }


    public function update(Request $request , $id)
    {

        $request->validate([
            'currentpass'=>'required',
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::findOrFail($id);

        if(Hash::check($request->currentpass, $user->password))
        {
            $user->update([
                'password'=>Hash::make($request->password),
            ]);

            return redirect()->back()->with(['success'=>'password is updated']);
        }

        return redirect()->back()->with(['error'=>'current password is incorrect']);

    }


}
