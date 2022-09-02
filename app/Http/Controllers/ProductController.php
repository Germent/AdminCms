<?php

namespace App\Http\Controllers;
use App\Models\ProductCategories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function product(){
        $products = Products::all();
        return view('product.product')->with("products", $products);
    }

    public function categoriesList(){
        
        $categories = ProductCategories::all();
        return view('categories.categories')->with("categories", $categories);
        
    }

    public function categoriesForm(Request $request){
        $view = view('categories.form');

        if($request->filled('id')) {
            $categories = ProductCategories::where('id',$request->id)->first();
            if(!$categories) return redirect('/categories');
            $view = $view->with('categories', $categories);
        }

        return $view;

    }

    public function categoriesSave(Request $request){

        if(!$request->filled('category')) throw new \Exception('Category field must be filled');

            if($request->filled('id')) $categories = ProductCategories::where('id',$request->id)->first();
                else $categories = new ProductCategories;
    
        if(!$categories) return redirect('/categories');

            $categories->category = $request->category;
            $categories->description = $request->description;
            $categories->save();

            return redirect('/categories')->with('success', 'Category saved successfully');
    }
    
}
