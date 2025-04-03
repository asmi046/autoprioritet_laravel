<?php

namespace App\Http\Controllers;

use App\Models\SearchQuery;

use Illuminate\Http\Request;
use App\Services\TrinityPartsWS;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function index(Request $request) {

        $search_str = $request->input('search');

        SearchQuery::create([
            'query' => $search_str,
            'ip' => $request->ip(),
            'useragent' => $request->userAgent(),
            'user_id' => (Auth::check())?Auth::id():NULL
        ]);


        $service = new TrinityPartsWS(config('trinity.trinity_key'));
        $result = [];

        if (!empty($search_str)) {
            $result = $service->searchBrands($search_str);
        }

        // dd($result, $search_str);

        return view('search', ['brand' => $result, 'search' => $search_str ]);
    }
}
