<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategories extends Model
{
    use HasFactory;


    public function products() {
        return $this->hasMany(Products::class, 'product_categories', 'id');
    }
}
