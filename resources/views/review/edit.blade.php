@extends('layouts.app')
@include('layouts.header')

@section('content')
<div class="review-post">
<form action="{{route('review.update',$review->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">レビュータイトル</label><br>
    <input type="text" name="title" id="title" value="{{$review->title}}" style="width:300px;">
    <div class="form-group">
        <label for="review">レビュー</label><br>
        <textarea name="review" id="review" cols="80" rows="5">{{$review->review}}</textarea>
    </div>
    <div class="form-group">
        <p name="star" id="star"></p>
    </div>
    <div class="mt-4">
        <button type="submit" class="btn">投稿する</button>
    </div>
</form>
</div>

<script>
        $('#star').raty({
            size: 36,
            starOff: "{{ asset('images/star-off.png') }}",
            starOn: "{{ asset('images/star-on.png') }}",
        });
</script>
@endsection

@include('layouts.footer')
