@extends('layouts.app')
@include('layouts.header')

@section('content')

<form method="GET" action="/item">
    <input type="text" name="keyword">
    <input type="submit" value="商品検索">
</form>

<form action="/item" method="GET">
    <div class="form-group">
        <select name="category_id" id="category_id" class="custom-select">
            @foreach($categories as $id=>$category)
                <option value="{{$id}}">{{$category}}</option>
            @endforeach
        </select>
        <input type="submit" value="検索">
    </div>
</form>

<div class="flex">
@foreach($items as $item)
<section class="item-card">
  <img class="item-card-img" src="{{ asset('/images/' . $item->image_path) }}" >
  <div class="item-card-content">
    <a href="/item/{{$item->id}}"><h1 class="item-card-title">{{$item->name}}</h1></a>
  </div>
  <div class="item-card-link">
        <p>{{$item->fee}}円</p>
        <p>Website</p>
  </div>
</section>
@endforeach
</div>

@endsection

@include('layouts.footer')
