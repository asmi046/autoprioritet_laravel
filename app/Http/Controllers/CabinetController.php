<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabinetController extends Controller
{
    public function index(Request $request) {
        return view('cabinet.cabinet');
    }

    public function user_data(Request $request) {
        return view('cabinet.user-data');
    }
}
