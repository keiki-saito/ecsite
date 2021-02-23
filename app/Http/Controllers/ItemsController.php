<?php

namespace App\Http\Controllers;
use App\Item;
use App\Review;
use App\Category;
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

        return view('item.show',compact('item','reviews'));
    }
}
