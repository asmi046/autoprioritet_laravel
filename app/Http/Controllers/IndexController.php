<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Services\TrinityPartsWS;

class IndexController extends Controller
{
    public function index() {
        $service = new TrinityPartsWS(config('trinity.trinity_key'));

        $result = $service->searchBrands('OC90');
        dd($service, $result);

        return view('index');
    }
}
