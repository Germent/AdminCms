<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;
use App\Models\Products;
use App\Models\ProductCategories;
use App\Models\Vouchers;
use App\Models\VoucherUsages;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function transactionList(Request $request)
    {
        $data = Transactions::select('id','customer_name','status','total','created_at')->orderBy('created_at','desc');

        // if(!$request->filled('date')) {
        //     $date = Carbon::now()->startOfMonth()->format('Y-m-d') . ' - ' . Carbon::now()->endOfMonth()->format('Y-m-d');
        //     return redirect('/transaction?date=' . urlencode($date));
        // }

        if($request->filled('date')) {
            $date = explode(' - ', $request->date);
            $data = $data->whereBetween('created_at',[$date[0], $date[1]]);
        }
        // if($request->filled('code')) $data = $data->where('code',$request->code);
        if($request->filled('customer_name')) $data = $data->where('customer_name',$request->customer_name);
        if($request->filled('customer_email')) $data = $data->where('customer_email',$request->customer_email);
        if($request->filled('status') && $request->status != 0) {
            if($request->status == 'cancel') $status = 0;
            elseif($request->status == 'pending') $status = 1;
            elseif($request->status == 'paid') $status = 2;
            $data = $data->where('status',$status);
        }

        $data = $data->get();

        return view('transaction.list', compact('data'));
    }

    public function transactionCreate()
    {
        $products = Products::where('status',1)->with('productcategories')->get();
        $categories = ProductCategories::all();

        return view('transaction.transaction')->with('products',$products)->with('categories',$categories);
    }

    public function transactioncreateTrx(Request $request){

    }
}
