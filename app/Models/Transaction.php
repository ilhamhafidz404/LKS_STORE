<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable= [
        'product_id',
        'code_transaction',
        'total'
    ];

    public function Product(){
        return $this->belongsTo(Product::class);
    }
}
