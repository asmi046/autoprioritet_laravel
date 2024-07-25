<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function index(Request $request) {
        $orders = Order::where('user_id', Auth::user()->id)->paginate(15);

        return view('cabinet.cabinet', ['orders' => $orders]);
    }

    public function user_data(Request $request) {
        return view('cabinet.user-data');
    }
}
