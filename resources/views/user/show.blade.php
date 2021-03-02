@extends('layouts.app')
@include('layouts.header')

@section('content')
<div style="margin: 0 auto;">
<div>
    <div>こんにちは、</div>
    <div>{{$user->name}}さん</div>
</div>

    <h2>購入履歴</h2>
    @foreach($orders as $order)
    <div class="card mb-3" style="max-width: 540px; max-height: 180px;">
        <div class="row no-gutters">
            <div class="col-md-4">
             <img src="{{ asset('/images/' . $order->item->image_path) }}" width="100%" height="180px" style="margin: 0;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><div>{{$order->item->name}}</div></h5>
                    <div>購入日：{{$order->created_at->format('Y/m/d')}}</div>
                    <div>購入時値段：{{$order->item->fee}}円</div>
                    <div>購入個数：{{$order->quantity}}個</div>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>



@endsection

@include('layouts.footer')
