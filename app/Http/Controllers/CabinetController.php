<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabinetController extends Controller
{
    public function index(Request $request) {
        return view('cabinet.main-cabinet');
    }
}
