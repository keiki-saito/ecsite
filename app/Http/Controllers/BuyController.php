<?php

namespace App\Http\Controllers;

use App\User;
use App\Cart;
use App\Order;
use App\SubAddress;
use App\MainOrder;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class BuyController extends Controller
{

    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->get(); #ログインユーザーがカートに入れている商品を取得
        #カートの中身が無い時の処理
        if (count($carts) === 0) {
            return redirect()->route('cart.index')->with('flash_message', 'カートに商品がありません');
        }
        $user = Auth::user();
        $point = $user->point;
        $subAddresses = SubAddress::where('user_id', Auth::id())->get();
        $total = 0;
        #支払い金額計算
        foreach ($carts as $cart) {
            $total += $cart->item->fee * $cart->quantity;
        }
        return view('buy.index', compact('carts', 'user', 'subAddresses', 'total', 'point'));
    }

    #購入処理
    public function store(Request $request)
    {


        //dd($request->all());
        $carts = Cart::where('user_id', Auth::id())->get(); #ログインユーザーがカートに入れている商品を取得

        if ($request->has('post')) {

            \DB::beginTransaction();
            try {
               
                $total = 0;
                #支払い金額計算
                foreach ($carts as $cart) {
                    $total += $cart->item->fee * $cart->quantity;
                }

                //ポイント加算
                $user = User::where('id', Auth::id())->first();
                $user->point +=  floor($total / 10);
                $user->save();


                $MainOrder = new MainOrder;
                $MainOrder->user_id = Auth::id();
                $MainOrder->total = $request->all_total;
                $MainOrder->save();


                //orderに商品情報を入れる処理
                foreach ($carts as $cart) {
                    #orderテーブルにインサートする処理
                    $order = new Order;
                    $order->user_id = Auth::id();
                    $order->main_order_id = $MainOrder->id;
                    $order->item_id = $cart->item->id;
                    $order->quantity = $cart->quantity; //購入個数
                    $order->fee = $cart->item->fee;
                    $order->save();
                    $cart->delete();
                }

                //追加住所の処理
                if ($request->sub_address) {
                    $subAddresses = SubAddress::where('user_id', Auth::id())->get();
                    $already = false; //すでに住所が登録しているかのフラグ
                    //登録済みの住所かチェック
                    foreach ($subAddresses as $subAddress) {
                        if ($subAddress->sub_address == $request->sub_address || Auth::user()->address == $request->sub_address) {
                            $already = true;
                        }
                        //登録済みであったらforeach終了
                        if ($already) {
                            break;
                        }
                    }
                    //未登録の場合新しく登録
                    if (!$already) {
                        $subAddress = new SubAddress;
                        $subAddress->user_id =  Auth::id();
                        $subAddress->sub_address = $request->sub_address;
                        $subAddress->save();
                    }
                }
                \DB::commit();
                return view('buy.completed'); //購入完了画面に遷移
            } catch (\Exception $e) {
                \DB::rollback();
                report($e);
                session()->flash('flash_message', '購入に失敗しました');
            }
        }

        $request->flash();
        return $this->index();
    }
}
