@extends('layouts.app')
@include('layouts.header')

@section('content')
<div class="form-container">
<form method="GET" action="/item" width="400px">
    <input type="text" name="keyword">
    <input type="submit" value="商品検索">
</form>

<form action="/item" method="GET">
    <div class="form-group">
        <select name="category_id" id="category_id" class="category_select">
            @foreach($categories as $id=>$category)
                <option value="{{$id}}">{{$category}}</option>
            @endforeach
        </select>
        <input type="submit" value="検索">
    </div>
</form>
</div>
</div>

<div class="flex">
@foreach($items as $item)
<section class="item-card">
  <img class="item-card-img" src="{{ asset('/images/' . $item->image_path) }}" >
  <div class="item-card-content">
    <a href="/item/{{$item->id}}"><h1 class="item-card-title">{{$item->name}}</h1></a>
  </div>
  <div class="item-card-link">
        <p>{{$item->fee}}円</p>
        <button>カートに入れる</button>
  </div>
</section>
@endforeach
</div>

@endsection

@include('layouts.footer')
