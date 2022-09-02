<?php

namespace App\Models;

use App\Models\Vouchers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VoucherUsages extends Model
{
    use HasFactory;


    
    public function vouchers(){
        return $this->hasMany(Vouchers::class);
    }
}
