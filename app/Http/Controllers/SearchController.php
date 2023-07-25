<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\TrinityPartsWS;

class SearchController extends Controller
{
    public function index(Request $request) {

        $search_str = $request->input('search');

        $service = new TrinityPartsWS(config('trinity.trinity_key'));
        $result = [];

        if (!empty($search_str)) {
            $result = $service->searchBrands($search_str);
        }

        return view('search', ['brand' => $result, 'search' => $search_str ]);
    }
}
