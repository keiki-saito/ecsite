<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    //Aboutページ
    public function about()
    {
        $item01 = Item::findOrFail(13);
        $item02 = Item::findOrFail(14);
        $item03 = Item::findOrFail(15);
        $item04 = Item::findOrFail(1);
        return view('about',compact('item01','item02','item03','item04'));
    }
}
