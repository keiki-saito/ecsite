<?php

namespace App\Http\Controllers;
use App\User;
use App\Order;
use App\SubAddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $user = User::where('id',Auth::id())->firstOrFail();  #ログインユーザーの情報取得
        $orders = Order::where('user_id',Auth::id())->get(); #購入済みの商品
        return view('user.show',compact('user','orders'));
    }

    public function edit()
    {
        $user = User::where('id',Auth::id())->firstOrFail();  #ログインユーザーの情報取得
        return view('user.edit',compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::where('id',Auth::id())->firstOrFail();  #ログインユーザーの情報取得

        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->save();

        return redirect()->route('user.show',[$user->id])->with('flash_message',' ユーザー情報を編集しました');

    }




}
