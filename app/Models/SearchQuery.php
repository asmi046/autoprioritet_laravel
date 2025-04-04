<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchQuery extends Model
{
    use HasFactory;

    public $fillable=[
        'query',
        'user_id',
        'type',
        'ip',
        'brand',
        'useragent',
        'headers'
    ];
}
