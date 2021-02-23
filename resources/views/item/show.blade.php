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
        <p class="card-text">{{$item->fee}}</p>
        <button>カートに入れる</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- レビュー一覧 -->
@foreach($reviews as $review)
    {{$review->review}}
    @switch($review->star)
    @case(1)
    <span>⭐</span>
    @break
    @case(2)
    <span>⭐⭐</span>
    @break
    @case(3)
    <span>⭐⭐⭐</span>
    @break
    @case(4)
    <span>⭐⭐⭐⭐</span>
    @break
    @case(5)
    <span>⭐⭐⭐⭐⭐</span>
    @break
    @endswitch
@endforeach

<!-- レビュー投稿機能 -->

<form action="/review" method="POST">
    @csrf
    <input type="hidden" name="item_id" value="{{$item->id}}">
    <div class="form-group">
        <label for="review"></label>
        <textarea name="review" id="review" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <p name="star" id="star"></p>
    </div>
    <div class="mt-4">
        <button type="submit">投稿する</button>
    </div>
</form>


<script>
        $('#star').raty({
            size: 36,
            starOff: "{{ asset('images/star-off.png') }}",
            starOn: "{{ asset('images/star-on.png') }}",
        });
    </script>
@endsection




@include('layouts.footer')
