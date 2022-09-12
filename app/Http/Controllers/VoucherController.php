<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vouchers;
use Carbon\Carbon;

class VoucherController extends Controller
{
    public function voucherList(){
        $voucher = Vouchers::all();

        return view('voucher.voucher')->with('voucher', $voucher);
    }


    public function voucherForm(Request $request){
        $view = view('voucher.form');

        if($request->filled('id')) {
            $voucher = Vouchers::where('id',$request->id)->first();
            if(!$voucher) return redirect('/voucher');
            $view = $view->with('voucher', $voucher);
        }

        return $view;
    }

    public function voucherSave(Request $request){
            if(!$request->filled('code')) throw new \Exception('Code field must be filled');
            if(!$request->filled('type') || $request->type == '0') throw new \Exception('Type field must be filled');
            if(!$request->filled('disc_value') || $request->disc_value < 1) throw new \Exception('Discount Value field must be filled');
            if(!$request->filled('start_date')) throw new \Exception('Start Date field must be filled');
            if(!$request->filled('end_date')) throw new \Exception('End Date field must be filled');

            $startDate = Carbon::parse($request->start_date);
            $endDate = Carbon::parse($request->end_date);
            if($startDate->gt($endDate)) throw new \Exception('Start Date cannot be greater than End Date');

            if($request->type == '2' && ($request->disc_value < 0 || $request->disc_value > 100)) throw new \Exception('Discount value not valid for percentage type');



            if($request->filled('id')) {
                $voucher = Vouchers::where('id',$request->id)->first();
                if($voucher->code != $request->code) {
                    $check = Vouchers::where('code',$request->code)->first();
                    if($check) throw new \Exception('Code already exist');
                }
            } else {
                $voucher = new Vouchers;
                $check = Vouchers::where('code',$request->code)->first();
                if($check) throw new \Exception('Code already exist');
            }
            
            if(!$voucher) return redirect('/voucher');

            $voucher->code = $request->code;
            $voucher->type = $request->type;
            $voucher->disc_value = $request->disc_value;
            $voucher->start_date = $request->start_date;
            $voucher->end_date = $request->end_date;
            $voucher->status = true;
            $voucher->save();

            return redirect('/voucher')->with('success','Voucher saved successfully');
    }

    public function voucherDelete(Request $request){
        if(!$request->filled('id')) return redirect()->back();

            $voucher = Vouchers::where('id',$request->id)->first();
            if(!$voucher) throw new \Exception('ID not found');
            $voucher->delete();

            return redirect('/voucher')->with('success','Voucher deleted successfully');
    }
}
