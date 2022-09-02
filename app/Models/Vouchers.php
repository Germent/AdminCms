<?php

namespace App\Models;

use App\Models\VoucherUsages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vouchers extends Model
{
    use HasFactory;

    public function voucherusages(){
        return $this->belongsTo(VoucherUsages::class, 'vouchers_id', 'id');
    }
}
