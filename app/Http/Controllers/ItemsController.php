<?php

namespace App\Http\Controllers;
use App\Item;
use App\Review;
use App\Category;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index (Request $request)
    {
        $category= new Category;
        $categories = $category->getCategories();
        $category_id=$request->category_id;
        $keyword=$request->keyword;
        $items = Item::orderBy('id')
        ->category($category_id)
        ->searchName($keyword)
        ->get();
        return view('item.index',compact('items','categories','category_id','keyword'));
    }

    public function show (Request $request,$id)
    {
        $item = Item::findOrFail($id);
        $reviews = Review::where('item_id',$id)->get();
        $orders = Order::where('user_id',Auth::id())->where('item_id',$item->id)->get();  #ログインユーザーかつitem_idが$item->idと同じorderを(取得レビュー投稿制限のため)
        return view('item.show',compact('item','reviews','orders'));
    }
}
