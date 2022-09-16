<?php

namespace App\Models;

use App\Models\Products;
use App\Models\Transactions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionsDetails extends Model
{
    use HasFactory;
    protected $table = 'transaction_details';

    public function transactions(){
        return $this->belongsTo(Transactions::class, 'transactions_id', 'id');
    }

    public function products(){
        return $this->belongsTo(Products::class, 'products_id', 'id');
    }
}
