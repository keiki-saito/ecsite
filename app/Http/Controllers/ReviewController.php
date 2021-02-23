<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        //dd($request);
        $review = new Review;

        $review->review = $request->review;
        $review->star = $request->star;
        $review->user_id = Auth::user()->id;

        $review->item_id = $request->item_id;
        $review->save();

        return redirect()->route('item.show',[$request->item_id])->with('flash_message','レビュー投稿完了');
    }
}
