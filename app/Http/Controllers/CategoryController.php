<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Str ;

class CategoryController extends Controller
{
    public function index() {
        $categories = category::latest()->get() ;
        return view('admin.category.index' , compact('categories')) ;
    }

    public function create() {
        return view('admin.category.create') ;
    }

    public function store(Request $request) {
        category::create([
            'name' => $request->name ,
            'slug' => Str::slug($request->name) ,
        ]) ;

        return redirect('admin/category')->with('message' , 'Category Added Succesfully') ;
    }

    public function destroy(int $category_id) {
        category::findOrFail($category_id)->delete() ;
        return redirect('admin/category')->with('message' , 'Category Deleted Succesfully with all its products') ;

    }
}
