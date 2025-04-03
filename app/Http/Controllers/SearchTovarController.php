<?php

namespace App\Http\Controllers;

use App\Models\SearchQuery;

use Illuminate\Http\Request;

use App\Services\TrinityPartsWS;
use App\Services\ResultGroupService;
use Illuminate\Support\Facades\Auth;

class SearchTovarController extends Controller
{
    public function index($article, $brand, Request $request) {

        $order_by = $request->input('order_by')?$request->input('order_by'):'price';
        $order = $request->input('order')?$request->input('order'):'asc';

        $serviceResult = new ResultGroupService();
        $service = new TrinityPartsWS(config('trinity.trinity_key'));
        $result = [];

        SearchQuery::create([
            'query' => $article,
            'ip' => $request->ip(),
            'type' => 'Бренд',
            'brand' => $brand,
            'useragent' => $request->userAgent(),
            'headers' => json_encode($request->header()),
            'user_id' => (Auth::check())?Auth::id():NULL
        ]);

        $result = $service->searchItems($article, $brand, includeStocks:'1', showAnalogues:true);

        $ob_result = $serviceResult->groupResult($result, $order_by, $order, $brand);

        // dump($result, $article, $brand);

        return view('search-tovar', [
            'brand' => $brand,
            'article' => $article,
            'tovars' => $ob_result['tovars'],
            'crosses' => $ob_result['crosses'],
            'express' => $ob_result['express'],
        ]);
    }
}
