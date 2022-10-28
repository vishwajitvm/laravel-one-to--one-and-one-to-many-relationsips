<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str ;
use App\Models\category ;

class ProductController extends Controller
{
    public function index() {
        $products = Product::latest()->get() ;
        return view('admin.product.index' , compact('products') ) ;
    }

    public function create() {
        $categories = category::all() ;
        return view('admin.product.create' , compact('categories')) ;
    }

    public function store(Request $request) {
        $category = category::findOrFail($request->category_id) ;

        /* First method */
        $product = new product ;
        $product->name = $request->name ;
        $product->slug = Str::slug($request->name) ;
        $product->price = $request->price ;

        $category->products()->save($product) ;

        /* Second method */
        // $category->products()->create([
        //     'name' => $request->name ,
        //     'slug' => Str::slug($request->name) ,
        //     'price' => $request->price ,
        // ]) ;

        return redirect('admin/products')->with('message' , "$request->name product Added Succesfully") ;
    }

    public function edit( int $product){
        $categories = category::all() ;
        $product = Product::findOrfail($product) ;
        return view('admin.product.edit' , compact('product' , 'categories')) ;
    }

    public function update(Request $request , $product_id) {
        /* First method */
        $product = category::findOrFail($request->category_id)->products()->where('id' , $product_id)->first() ;
        $product->name = $request->name ;
        $product->slug = Str::slug($request->name) ;
        $product->price = $request->price ;

        $product->update() ;

        /* Second method */
        // $category = category::findOrFail($request->category_id) ;
        // $category->products()->where('id' , $product_id)->update([
        //     'name' => $request->name ,
        //     'slug' => Str::slug($request->name) ,
        //     'price' => $request->price ,
        // ]) ;

        return redirect('admin/products')->with('message' , "$request->name product Updated Succesfully") ;

    }

}
