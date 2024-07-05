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
            $item['price'] = round($item['price'] * 1.1, 2);
        }

        return $item;
    }

    public function groupResult($result, $orderby='price', $order='desc', $brand){

        $express_result = [];
        $ob_result = [];
        $crosses_result = [];

        usort($result['data'], function ($a, $b) use ($orderby, $order) {
            if ($order === 'asc')
                return $a[$orderby] > $b[$orderby];
            else
                return $a[$orderby] < $b[$orderby];
        });

        foreach ($result['data'] as $item) {
            if ($item['caption'] === 'crosses') {
                $crosses_result['tovars'][] = $item;
                continue;
            }


            if ($item['producer'] === $brand)
                $ob_result[$item['producer']]['tovars'][] = $this->itemChenge($item);
            else
                $express_result['tovars'][] = $this->itemChenge($item);
        }


        foreach ($ob_result as $key => $item)
        {
            $ob_result[$key]['didgest'] = $this->calcDigest($item['tovars']);
        }

        if (isset($express_result['tovars']))
            $express_result['didgest'] = $this->calcDigest($express_result['tovars']);
        if (isset($crosses_result['tovars']))
            $crosses_result['didgest'] = $this->calcDigest($crosses_result['tovars']);

        // dump($express_result);
        // dump($crosses_result);

        return ['tovars' => $ob_result, 'express' => $express_result,  'crosses' => $crosses_result];
    }

}
