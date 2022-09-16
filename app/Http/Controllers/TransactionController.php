<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;
use App\Models\TransactionsDetails;
use App\Models\Products;
use App\Models\ProductCategories;
use App\Models\Vouchers;
use App\Models\VoucherUsages;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function transactionList(Request $request)
    {
        $data = Transactions::select('id','transaction_id','customer_name','status','total','total_purchase','created_at')->orderBy('created_at','desc');

        // if(!$request->filled('date')) {
        //     $date = Carbon::now()->startOfMonth()->format('Y-m-d') . ' - ' . Carbon::now()->endOfMonth()->format('Y-m-d');
        //     return redirect('/transaction?date=' . urlencode($date));
        // }

        // if($request->filled('date')) {
        //     $date = explode(' - ', $request->date);
        //     $data = $data->whereBetween('created_at',[$date[0], $date[1]]);
        // }
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

        
        $products = Products::where('id',$request->id)->first();
        $transactions = new Transactions;
        // $transactions->transaction_id = $this->generateCode();
        $transactions->id;
        $transactions->customer_name = $request->customer_name;
        $transactions->customer_email = $request->customer_email;
        $transactions->customer_phone = $request->customer_phone;
        $transactions->sub_total = $request->sub_total;
        $transactions->total = $request->total;
        $transactions->total_purchase = $request->total_purchase;
        $transactions->payment_method = $request->payment_method;
        $transactions->additional_request = $request->additional_request;
        $transactions->status = true;
        $transactions->save();
        $transactions->transaction_id = 'TR-'. Carbon::now()->format('Ymd').'00'.$transactions->id;
        $transactions->save();
        
        $detailtransactions = new TransactionsDetails;
        $detailtransactions->transaction_id = $transactions->id;
        $detailtransactions->products_id = $request->products_id;
        $detailtransactions->qty = $request->qty;
        $detailtransactions->price_satuan = $request-> price_satuan;
        $detailtransactions->price_total = $request-> price_total;
        $detailtransactions->price_purchase_satuan = $request-> price_purchase_satuan;
        $detailtransactions->price_purchase_total = $request-> price_purchase_total;
        $detailtransactions->save();
        

        return redirect ('transaction')->with('success', 'Success Create Transaction');

    }

    public function generateCode(){
        $latestTrx = Transactions::orderBy('created_at','desc')->first();
        if($latestTrx) {
            $serial = (int) substr($latestTrx->code, -3) + 1;
            if(strlen($serial) == 1) $serial = '00' . $serial;
            elseif(strlen($serial) == 2) $serial = '0' . $serial;
        } else $serial = '001';

        return 'TR-' . Carbon::now()->format('Ymd') . $serial;
    }

    public function transactionDelete(Request $request)
    {

            $transaction = Transactions::where('id',$request->id)->first();;
            $transaction->delete();
            return redirect('/transaction')->with('success','Transaction Deleted Successfully');
    }

    public function addVoucher(){
        $vouchers = Vouchers::all();
        $products = Products::all();


        return view('transaction.transaction')->with('vouchers', $vouchers)->with('products', $products);
    }
}
