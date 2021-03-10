<?php

namespace App\Http\Controllers\admin;
use App\Item;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageItemController extends Controller
{
    public function index(Request $request){
        $category= new Category;
        $categories = $category->getCategories(); //すべてのカテゴリー情報を取得
        $category_id=$request->category_id;
        $keyword=$request->keyword;
        if($category_id){
            $items = Item::orderBy('id')
            ->category($category_id)->get();
        }

        if($keyword){
            $items = Item::orderBy('id')
            ->searchName($keyword)->get();
        }



        if(!$category_id && !$keyword){
            $items = Item::all();
        }



        return view('admin.item_list',compact('items','categories','category_id'));
	}

    public function show(Request $request,$id)
    {
        $item = Item::findOrFail($id);
        return view('admin.item_detail',compact('item'));
    }

    public function add()
    {
        $category= new Category;
        $categories = $category->getCategories(); //すべてのカテゴリー情報を取得
        return view('admin.new_item',compact('categories'));
    }

    public function create(Request $request)
    {
        //dd('新規作成');
        $item = new Item;
        $item->name = $request->name;
        $item->fee = $request->fee;
        $item->image_path = $request->image_path;
        // dd($request->category_id);
        $item->category_id = $request->category_id;
        $item->detail = $request->detail;
        $item->stock = $request->stock;
        $item->save();

        return redirect()->route('admin.item.index');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('admin.item_edit',compact('item'));
    }

    public function update(Request $request,$id)
    {
        $item = Item::findOrFail($id);
        $item->name = $request->name;
        $item->fee = $request->fee;
        $item->detail = $request->detail;
        $item->stock = $request->stock;
        if(!$item->stock ==0){
            $item->stock_flag = 0;
        }
        $item->save();

        return redirect()->route('admin.item.show',[$item->id])->with('flash_message',' 商品情報を編集しました');

    }
}
