<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'created_at',
        'name',
        'email',
        'phone',
        'adress',
        'comment',
        'session_id',
        'user_id',
        'position_count',
        'amount',
        'pay',
        'delivery',
    ];

    protected $with = [
        'orderCart',
    ];


    public function orderCart() {
        return $this->hasMany(OrderProduct::class);
    }
}
