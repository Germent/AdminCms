<?php

namespace App\Models;

use App\Models\VoucherUsages;
use App\Models\TransactionsDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transactions extends Model
{
    use HasFactory;

    public function transactiondetails() {
        return $this->hasMany(TransactionsDetails::class, 'transactions_id', 'id');
    }

    public function voucherusages(){
        return $this->belongsTo(VoucherUsages::class, 'transactions_id', 'id');
    }

}
