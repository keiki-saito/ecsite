<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index(Request $request)
    {
        $carts = Cart::where('user_id',Auth::id())->get(); #購入済みではない商品を取得
        //dd($carts);
        return view('cart.index',compact('carts'));
    }


    public function store(Request $request)
    {
        $cart = new Cart;
        $cart->user_id = Auth::user()->id;
        $cart->item_id = $request->item_id;
        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect('/item')->with('flash_message','商品をカートに入れました');

    }
}
