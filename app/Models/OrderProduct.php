<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_sku',
        'quentity',
        'price',
    ];

    public function tovar_data() {
        return $this->hasOne(Product::class, 'sku', 'product_sku');
    }

}
