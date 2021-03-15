<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ShippingAjaxController extends Controller
{
    public function shipping()
    {
        $carts = Cart::where('user_id',Auth::id())->get();
        $total = 0;
        #支払い金額計算
        foreach ($carts as $cart) {
            $total += $cart->item->fee * $cart->quantity;
        }
        return $total;
    }
}
