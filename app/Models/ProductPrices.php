<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrices extends Model
{
    use HasFactory;


    public $fillable = [
        'product_id',
        'sku',
        'value',
        'price',
        'old_price',
    ];

    public function product_info() {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
