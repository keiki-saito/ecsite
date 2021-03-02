<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index(Request $request)
    {
        $carts = Cart::where('user_id',Auth::id())->get(); #ログインユーザーのカート情報を取得
        $total=0;
        #合計金額取得
        foreach($carts as $cart){
            $total += $cart->item->fee * $cart->quantity;
        }

        return view('cart.index',compact('carts','total'));
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

    public function destroy(Request $request,$id)
    {
        $cart = Cart::findOrFail($id);

        $cart->delete();

        return redirect()->route('cart.index')->with('flash_message','レビューを削除しました');
    }
}
