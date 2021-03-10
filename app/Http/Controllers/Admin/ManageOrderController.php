<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\User;

class ManageOrderController extends Controller
{

    //すべての購入情報
    public function index()
    {
        $orders = Order::all();
        return view('admin.order_list',compact('orders'));
    }
}
