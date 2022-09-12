<?php

namespace App\Http\Controllers;
use App\Models\ProductCategories;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function productList(Request $request){
        $products = Products::with('productcategories');
        

        if($request->filled('name')) $products = $products->where('name','LIKE','%'.$request->name.'%');
        if($request->filled('code')) $products = $products->where('code',$request->code);
        if($request->filled('status')) {
            if($request->status == 'active') $products = $products->where('status', 1);
            elseif($request->status == 'nonactive') $products = $products->where('status', 0);

        }

        $products = $products->get();

        return view('product.product')->with("products", $products);
    }

    public function productForm(Request $request)
    {
        $categories = ProductCategories::all();
        $view = view('product.form', compact('categories'));

        if($request->filled('id')) {
            $products = Products::where('id',$request->id)->with('productcategories')->first();
            if(!$products) return redirect('/product');
            $view = $view->with('products', $products);
        }

        return $view;
    }

    public function productSave(Request $request)
    {
        if(!$request->filled('name')) throw new \Exception('Name field must be filled');
            if(!$request->filled('code')) throw new \Exception('Code field must be filled');
            if(!$request->filled('product_categories_id') || $request->product_categories_id == '0') throw new \Exception('Category field must be filled');
            if(!$request->filled('price') || $request->price < 1) throw new \Exception('Price field must be filled');
            if(!$request->filled('purchase_price') || $request->purchase_price < 1) throw new \Exception('Purchase Price field must be filled');

            if($request->filled('id')) $products = Products::where('id',$request->id)->first();
            else $products = new Products;

            if(!$products) return redirect('/product');

            $products->name = $request->name;
            $products->code = $request->code;
            $products->product_categories_id = $request->product_categories_id;
            $products->status = ($request->filled('status') && $request->status == 'true');
            $products->price = $request->price;
            $products->purchase_price = $request->purchase_price;
            $products->short_description = $request->short_description;
            $products->description = $request->description;
            $products->new_product = ($request->filled('new_product') && $request->new_product == 'true');
            $products->best_seller = ($request->filled('best_seller') && $request->best_seller == 'true');
            $products->featured = ($request->filled('featured') && $request->featured == 'true');
            $products->save();

            return redirect('/product')->with('success','Product saved successfully');
    }

    public function productDelete(Request $request){
        if(!$request->filled('id')) return redirect()->back();

        $products = Products::where('id',$request->id)->first();
        if(!$products) throw new \Exception('ID not found');
        $products->delete();

        \DB::commit();

        return redirect('/product')->with('success','Product deleted successfully');

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

    public function categoriesDelete(Request $request){
        if(!$request->filled('id')) return redirect()->back();

            $categories = ProductCategories::where('id',$request->id)->first();
            if(!$categories) throw new \Exception('ID not found');
            $categories->delete();

            return redirect('/categories')->with('success','Category deleted successfully');
    }
    
}
