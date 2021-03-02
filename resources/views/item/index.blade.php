@extends('layouts.app')
@include('layouts.header')

@section('content')
@if(session('flash_message'))
    <div class="alert alert-success mt-4 mb-4">
        {{session('flash_message')}}
    </div>
@endif

<div class="search" style="margin: 0 auto;">


<form method="GET" action="/item">
    <input type="text" name="keyword" class="search-box" height="40px">
    <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
</form>

<form action="/item" method="GET" class="ml-4">
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




<div class="flex">
@foreach($items as $item)
<section class="item-card fadeinItem">
  <img class="item-card-img" src="{{ asset('/images/' . $item->image_path) }}" >
  <div class="item-card-content">
    <a href="/item/{{$item->id}}"><h1 class="item-card-title">{{$item->name}}</h1></a>
  </div>
  <div class="item-card-link">
        <p>{{$item->fee}}円</p>
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
</section>
@endforeach
</div>



@endsection

@include('layouts.footer')
