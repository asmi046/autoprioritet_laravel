<?php
namespace App\Services;

class ResultGroupService {

    protected function calcDigest($tovars) {
        $min = PHP_INT_MAX;
        $max = PHP_INT_MIN;


        foreach ($tovars as $item) {
            if ($item['price'] > $max)
                $max = $item['price'];

            if ($item['price'] < $min)
                $min = $item['price'];
        }

        return [
            'min_price' => $min,
            'max_price' => $max,
            'count' => count($tovars)
        ];

    }

    protected function itemChenge($item) {
        $deliverydays = explode("/", $item['deliverydays']);

        if (count($deliverydays) > 1)
            $item['deliverydays'] = $deliverydays[1];

        if (auth()->check()) {
            $item['price'] = round($item['price'] * 1.1, 2);
        } else {
            $item['price'] = round($item['price'] * 1.15, 2);
        }

        return $item;
    }

    public function groupResult($result){

        $ob_result = [];

        foreach ($result['data'] as $item)
            $ob_result[$item['producer']]['tovars'][] = $this->itemChenge($item);

        foreach ($ob_result as $key => $item)
        {
            $ob_result[$key]['didgest'] = $this->calcDigest($item['tovars']);

        }

        return $ob_result;
    }

}
