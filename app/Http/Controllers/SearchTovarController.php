<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\TrinityPartsWS;

use App\Services\ResultGroupService;

class SearchTovarController extends Controller
{
    public function index($brand, $article, ) {


        $serviceResult = new ResultGroupService();
        $service = new TrinityPartsWS(config('trinity.trinity_key'));
        $result = [];

        $result = $service->searchItems($article, $brand);

        $ob_result = $serviceResult->groupResult($result);

        return view('search-tovar', [
            'brand' => $brand,
            'article' => $article,
            'tovars' => $ob_result
        ]);
    }
}
