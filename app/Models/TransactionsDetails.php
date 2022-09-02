<?php

namespace App\Models;

use App\Models\Products;
use App\Models\Transactions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionsDetails extends Model
{
    use HasFactory;

    public function transactions(){
        return $this->belongsTo(Transactions::class);
    }

    public function products(){
        return $this->hasMany(Products::class);
    }
}
