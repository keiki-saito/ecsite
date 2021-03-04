@extends('layouts.app')
@include('layouts.header')

@section('content')


<div class="show-page-item" style="margin: 0 auto;">
<div class="card mb-3" style="max-width: 750px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img class="show-page-card-img" src="{{ asset('/images/' . $item->image_path) }}" width="100%" height="250">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$item->name}}</h5>
        <p class="card-text">{{$item->detail}}</p>
        <p class="card-text">{{$item->fee}}円</p>
        <!-- カートに入れる -->
        <form action="/cart" method="POST">
            @csrf
            <input type="hidden" name="item_id" value="{{$item->id}}">
            <select name="quantity">
                <option value="">-</option>
                @for($i=1;$i<=100;$i++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>個
            <button type="submit" class="btn">カートに入れる</button>
        </form>

      </div>
    </div>
  </div>
</div>
</div>

<!-- レビュー一覧 -->

@foreach($reviews as $review)
<div class="review-container">

    <div class="review-score">
        @switch($review->star)
        @case(1)
        <span class="mr-4">評価：@for($i=0; $i < 1; $i++)<i class="fas fa-star"></i>@endfor</span>
        @break
        @case(2)
        <span class="mr-4">評価：@for($i=0; $i < 2; $i++)<i class="fas fa-star"></i>@endfor</span>
        @break
        @case(3)
        <span class="mr-4">評価：@for($i=0; $i < 3; $i++)<i class="fas fa-star"></i>@endfor</span>
        @break
        @case(4)
        <span class="mr-4">評価：@for($i=0; $i < 4; $i++)<i class="fas fa-star"></i>@endfor</span>
        @break
        @case(5)
        <span class="mr-4">評価：@for($i=0; $i < 5; $i++)<i class="fas fa-star"></i>@endfor</span>
        @break
        @endswitch
    </div>
    <div class="review">
       <div class="review-title">{{$review->title}}</div>
        <div> {!! nl2br(e($review->review)) !!}</div>
        @if(Auth::id()==$review->user_id)
        <form style="display: inline-block;" method="POST" action="{{route('review.destroy',$review->id)}}">
            @csrf
            @method('DELETE')
            <button><i class="fas fa-trash-alt mr-1"></i>削除</button>
        </form>
           <a href="/review/{{$review->id}}/edit"><i class="fas fa-edit mr-1 ml-1"></i>編集</a>
        @endif
    </div>
</div>
@endforeach




<!-- レビュー投稿機能 -->
<!--ユーザーが商品を購入していたらレビュー投稿可能 -->
  @if(!count($orders) == 0)

<div class="review-post">
<form action="/review" method="POST">
    @csrf
    <input type="hidden" name="item_id" value="{{$item->id}}">
    <label for="title">レビュータイトル</label><br>
    <input type="text" name="title" id="title" placeholder="レビュータイトルはなんですか？" style="width:300px;">
    @error('title')
      <p style="color: red;">{{$message}}</p>
    @enderror

    <div class="form-group">
        <label for="review">レビュー</label><br>
        <textarea name="review" id="review" cols="80" rows="5"></textarea>
    </div>
    @error('review')
      <p style="color: red;">{{$message}}</p>
    @enderror

    <div class="form-group">
        <p name="star" id="star"></p>
    </div>
    @error('score')
      <p style="color: red;">{{$message}}</p>
    @enderror
    <div class="mt-4">
        <button type="submit" class="btn">投稿する</button>
    </div>
</form>
</div>
@endif



<script>
        $('#star').raty({
            size: 36,
            starOff: "{{ asset('images/star-off.png') }}",
            starOn: "{{ asset('images/star-on.png') }}",
        });



</script>


@endsection

@include('layouts.footer')
