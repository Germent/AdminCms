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
        return $this->belongsTo(ProductCategories::class);
    }

    public function transactiondetails(){
        return $this->belongsTo(TransactionsDetails::class, 'products_id', 'id');
    }
}
