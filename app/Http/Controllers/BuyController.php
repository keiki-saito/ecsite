<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Order;
use App\SubAddress;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class BuyController extends Controller
{

    public function index()
    {
        $carts = Cart::where('user_id',Auth::id())->get(); #ログインユーザーがカートに入れている商品を取得
        #カートの中身が無い時の処理
        if(count($carts) === 0){
            return redirect()->route('cart.index')->with('flash_message','カートに商品がありません');
        }
        $user = Auth::user();
        $subAddresses = SubAddress::where('user_id',Auth::id())->get();
        $total = 0;
        #支払い金額計算
        foreach($carts as $cart){
            $total += $cart->item->fee * $cart->quantity;
        }
        return view('buy.index',compact('carts','user','subAddresses','total'));
    }

    #購入処理
    public function store(Request $request)
    {

        $carts = Cart::where('user_id',Auth::id())->get(); #ログインユーザーがカートに入れている商品を取得
        if ($request->has('post')) {
            foreach ($carts as $cart) {
                $cart->delete();
                #orderテーブルにインサートする処理
                $order = new Order;
                $order->user_id = Auth::id();
                $order->item_id = $cart->item->id;
                $order->quantity = $cart->quantity;
                $order->fee = $cart->item->fee;
                $order->save();
            }

            if ($request->sub_address) {
                $subAddress = new SubAddress;
                $subAddress->user_id =  Auth::id();
                $subAddress->sub_address = $request->sub_address;
                $subAddress->save();
            }

            return view('buy.completed');

        }

         $request->flash();
        return $this->index();
    }




}
