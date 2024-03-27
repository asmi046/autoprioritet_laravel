<?php
namespace App\Services;

use Illuminate\Support\Str;

class TrinityProductService {

    public function create_product($product, $price) {
        $sku = generate_sku($product);
        $result = [
            'slug' => Str::slug($product['caption']."_".rand(1000,9999)),
            'caption' => $product['caption'],
            'code' => $product['code'],
            'producer' => $product['producer'],
            'stock' => $product['stock'],
            'deliverydays' => $product['deliverydays'],
            'min_ordr_count' => $product['minOrderCount'],
            'product_code' => $product['product_code'],
            'price' => $price,
            'sku' => $sku,
            'description' => $product['caption']." Артикл: ".$product['code']." Производитель: ".$product['producer'],
            'seo_title' => $product['caption'],
            'seo_description' => $product['caption']." Артикл: ".$product['code']." Производитель: ".$product['producer'],
        ];

        return $result;
    }

}
