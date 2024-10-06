<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CatController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;

Route::get('/login' , function(){
    return view('admin.login');
});

Route::post('login' , [AdminController::class , 'login'])->name('login');


Route::middleware('auth')->group(function(){

    Route::post('update/{id}' , [AdminController::class , 'update'])->name('user.update');
    Route::get('Admin/Dashboard', [AdminController::class , 'home'])->name('admin.home');
    Route::get('Admin/Add' , [AdminController::class , 'add'])->name('admin.add');
    Route::get('Admin/Show' , [AdminController::class , 'show'])->name('admin.show');
    Route::get('Admin/Profile' , [AdminController::class , 'profile'])->name('admin.profile');


    Route::get('Category/All' , [CategoryController::class , 'show'])->name('category.show');
    Route::get('Category/create' , [CategoryController::class , 'create'])->name('category.create');
    Route::post('Category/store' , [CategoryController::class , 'store'])->name('category.store');
    Route::get('Category/update/{id}' , [CategoryController::class , 'edit'])->name('category.edit');
    Route::put('Category/update/{id}' , [CategoryController::class , 'update'])->name('category.update');
    Route::delete('Category/delete/{id}' , [CategoryController::class , 'delete'])->name('category.delete');

    Route::get('cats/All' , [CatController::class , 'show'])->name('cats.show');
    Route::get('cats/create' , [CatController::class , 'create'])->name('cats.create');
    Route::post('cats/store' , [CatController::class , 'store'])->name('cats.store');
    Route::get('cats/update/{id}' , [CatController::class , 'edit'])->name('cats.edit');
    Route::put('cats/update/{id}' , [CatController::class , 'update'])->name('cats.update');
    Route::delete('cats/delete/{id}' , [CatController::class , 'delete'])->name('cats.delete');

    Route::get('/categories/{cat_id}', [CategoryController::class, 'getCategoriesByCat']);


    Route::get('product/All' , [ProductController::class , 'show'])->name('product.show');
    Route::get('product/create' , [ProductController::class , 'create'])->name('product.create');
    Route::post('product/store' , [ProductController::class , 'store'])->name('product.store');
    Route::get('product/update/{id}' , [ProductController::class , 'edit'])->name('product.edit');
    Route::put('product/update/{id}' , [ProductController::class , 'update'])->name('product.update');
    Route::delete('product/delete/{id}' , [ProductController::class , 'delete'])->name('product.delete');

});
