<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Review;
use App\Item;
use App\Http\Requests\ReviewRequest;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('review.edit',compact('review'));
    }

    public function update(Request $request,$id)
    {
        $review = Review::findOrFail($id);
        $review->title = $request->title;
        $review->review = $request->review;
        $review->star = $request->score;

        $review->save();

        return redirect()->route('item.show',[$review->item_id])->with('flash_message','編集完了しました');
    }


    public function store(ReviewRequest $request)
    {
        if(!Auth::user()){
            return redirect()->route('login')->with('flash_message','ログインしてください');
        }
        $review = new Review;

        $review->review = $request->review;
        $review->title = $request->title;
        $review->star = $request->score;
        $review->user_id = Auth::user()->id;

        $review->item_id = $request->item_id;
        $review->save();

        return redirect()->route('item.show',[$request->item_id])->with('flash_message','レビュー投稿完了');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('item.show',[$review->item_id])->with('flash_message','レビューを削除しました');
    }
}
