<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class , 'index'])->name('home');

Route::get('cat/{id}' , [CatController::class , 'show'])->name('cat.show');

Route::get('catgeory/{id}' , [CategoryController::class , 'show'])->name('user.category.show');

Route::get('women' , function(){
    return view('women');
})->name('women');

Route::get('chipp', function(){
    return view('chipp');
})->name('chipp');

Route::get('chip', function(){
    return view('chip');
})->name('chip');

Route::get('privacy' , function(){
    return view('privacy');
})->name('privacy');

Route::get('show/{id}' , [ProductController::class , 'showOne'] )->name('showOne');

require __DIR__."/admin.php";
