<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'caption',
        'code',
        'slug',
        'producer',
        'stock',
        'deliverydays',
        'min_ordr_count',
        'product_code',
        'price',
        'sku',
        'img',
        'description',
        'seo_title',
        'seo_description',
    ];


    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }

}
