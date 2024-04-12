<?php

namespace App\Http\Controllers\Cart;

use App\Models\Cart;
use App\Models\Order;

use App\Models\Product;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

use App\Mail\Cart\BascetSend;
use App\Actions\BascetToTextAction;
use App\Actions\TelegramSendAction;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Cart\BascetForm;
use App\Services\TrinityProductService;

class CartController extends Controller
{
    public function index() {
        return view('cart.cart');
    }

    public function add(Request $request, TrinityProductService $tp) {
        $_token = $request->input('_token');
        $addcount = $request->input('addcount');
        $prod = $request->input('product');
        $price = $request->input('price');

        $insert_prod = $tp->create_product($prod, $price, $price);

        $product = Product::firstOrCreate(
            ['sku' => $insert_prod['sku']],
            $insert_prod
        );

        Cart::add($product->id, $product->sku, $addcount, $price);

        return array($product->id, $_token, $addcount);
    }

    public function get_all() {
        $cart_product = Cart::with( 'tovar_content')->where("carts.session_id", session()->getId())->get();
        return ["count" => Cart::cart_coun(), "position" => $cart_product] ;
    }

    public function clear() {
        return Cart::cart_clear();
    }

    public function update(Request $request) {
        $product_id = $request->input('product_id');
        $new_count = $request->input('count');
        return Cart::update_tovar($product_id, $new_count);
    }

    public function delete(Request $request) {
        $product_id = $request->input('product_id');
        return Cart::delete_tovar($product_id);
    }

    public function send(BascetForm $request) {

        $order_data = [
            'name' => $request->input('fio'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'adress' => $request->input('adress'),
            'comment' => $request->input('comment'),
            'session_id' => session()->getId(),
            'user_id' => ($request->user())?$request->user()->id:0,

        ];

        $order = Order::create($order_data);


        // отправка заказа в Telegram
        $to_text = new BascetToTextAction();
        $tgsender = new TelegramSendAction();

        // return $request;

        $to_text = $to_text->handle($request, $order->id);
        $tgsender->handle($to_text);

        // foreach ($request->input('tovars') as $item) {
        //     $order->orderCart()->create($item);
        // }

        // $order->orderProducts()->sync(array_column($request->input('tovars'), "id"));

        Mail::to(config('cart.send_to'))->send(new BascetSend($request));

        return ['send' => true];
    }

    public function thencs() {
        Cart::cart_clear();
        return view("cart.thencs");
    }
}
