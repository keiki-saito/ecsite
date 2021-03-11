<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\MainOrder;
use App\User;

class ManageOrderController extends Controller
{

    //すべての購入情報
    public function index()
    {
        //$orders = Order::all();
        $MainOrders = MainOrder::all();
        return view('admin.order_list',compact('MainOrders'));
    }

    public function show($id)
    {
        $main_order = MainOrder::findOrFail($id);
        return view('admin.order_detail',compact('main_order'));
    }
}
