<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class BuyController extends Controller
{

    public function buy()
    {
        $carts = Cart::where('user_id',Auth::id())->get();
        // $user = Auth::user();

        $total = 0;

        foreach($carts as $cart){
            $total += $cart->item->fee * $cart->quantity;
            $cart->completed = 1;
            $cart->save();
        }
        //dd($carts);
        //$carts->save();



        return view('buy.buy');

    }




}
