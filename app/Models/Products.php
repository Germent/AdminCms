<?php

namespace App\Models;

use App\Models\ProductCategories;
use App\Models\TransactionsDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;


    public function productcategories(){
        return $this->belongsTo(ProductCategories::class, 'product_categories_id', 'id');
    }

    public function transactiondetails(){
        return $this->hasMany(TransactionsDetails::class, 'transactions_id', 'id');
    }
}
