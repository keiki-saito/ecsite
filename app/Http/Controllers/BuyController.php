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
        \DB::beginTransaction();
        try{
            if ($request->has('post')) {
                //わざと例外を出すための
                // if($request->has('post')){
                //     throw new \Exception;
                // }
                foreach ($carts as $cart) {
                    #orderテーブルにインサートする処理
                    $order = new Order;
                    $order->user_id = Auth::id();
                    $order->item_id = $cart->item->id;
                    $order->quantity = $cart->quantity; //購入個数
                    $order->fee = $cart->item->fee;
                    $order->save();
                    $cart->delete();
                }


                if ($request->sub_address) {
                    $subAddress = new SubAddress;
                    $subAddress->user_id =  Auth::id();
                    $subAddress->sub_address = $request->sub_address;
                    $subAddress->save();
                }
                \DB::commit();
                return view('buy.completed'); //購入完了画面に遷移
            }
        } catch(\Exception $e){
            \DB::rollBack();
            session()->flash('flash_message','購入に失敗しました');
            \Log::error('Error when completing order. ' . $e->getMessage());
        }

         $request->flash();
        return $this->index();
    }




}
