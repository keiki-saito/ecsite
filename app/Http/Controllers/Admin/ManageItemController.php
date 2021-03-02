<?php

namespace App\Http\Controllers\admin;
use App\Item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageItemController extends Controller
{
    function showItemList(){
		$item_list = Item::orderBy("id", "desc")->paginate(10);
		return view("admin.item_list", [
			"item_list" => $item_list
		]);
	}

    function showItemDetail($id){
		$item = Item::find($id);
		return view("admin.item_detail", [
			"item" => $item
		]);
	}
}
