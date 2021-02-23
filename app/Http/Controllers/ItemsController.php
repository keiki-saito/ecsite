<?php

namespace App\Http\Controllers;
use App\item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index (Request $request)
    {

        if($request->keyword){
            $items=Item::where('name','like','%'.$request->keyword.'%')->get();
        }else{
            $items = item::all();
        }
        return view('item.index',compact('items'));
    }
}
