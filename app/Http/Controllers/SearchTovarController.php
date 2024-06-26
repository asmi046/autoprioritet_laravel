<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\TrinityPartsWS;

use App\Services\ResultGroupService;

class SearchTovarController extends Controller
{
    public function index($brand, $article, Request $request) {

        $order_by = $request->input('order_by')?$request->input('order_by'):'price';
        $order = $request->input('order')?$request->input('order'):'asc';

        $serviceResult = new ResultGroupService();
        $service = new TrinityPartsWS(config('trinity.trinity_key'));
        $result = [];

        $result = $service->searchItems($article, $brand, includeStocks:'1', showAnalogues:true);

        $ob_result = $serviceResult->groupResult($result, $order_by, $order);

        // dump($ob_result);

        return view('search-tovar', [
            'brand' => $brand,
            'article' => $article,
            'tovars' => $ob_result['tovars'],
            'crosses' => $ob_result['crosses'],
        ]);
    }
}
