<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Services\TrinityPartsWS;

class IndexController extends Controller
{
    public function index(Request $request) {

        $search_str = $request->input('search');

        $service = new TrinityPartsWS(config('trinity.trinity_key'));
        $result = [];

        if (!empty($search_str)) {
            $result = $service->searchBrands($search_str);
        }

        return view('index', ['brand' => $result, 'search' => $search_str ]);
    }
}
