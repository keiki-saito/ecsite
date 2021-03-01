<?php

namespace App\Http\Controllers;
use App\User;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $user = User::where('id',Auth::id())->firstOrFail();  #ログインユーザーの情報取得
        $orders = Order::where('user_id',Auth::id())->get();
        return view('user.show',compact('user','orders'));
    }
}
