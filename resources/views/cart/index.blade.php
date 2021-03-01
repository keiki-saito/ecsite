@extends('layouts.app')
@include('layouts.header')

@section('content')

<div class="container">
    <div>
        <div class="mx-auto" style="max-width: 1200px;">
            <h2 class="text-center font-weight-bold">{{Auth::user()->name}}さんのカートの中身</h2>
            <div class="card-body">
                @foreach($carts as $cart)
                    <div>{{$cart->item->name}}</div>
                    <div>{{$cart->quantity}}個</div>
                    <div>{{$cart->item->fee}}円</div>
                    <img src="{{ asset('/images/' . $cart->item->image_path) }}">
                @endforeach
            </div>
        </div>
    </div>
</div>

<a href="/buy">レジに進む</a>



@endsection
@include('layouts.footer')
