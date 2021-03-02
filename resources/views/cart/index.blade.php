@extends('layouts.app')
@include('layouts.header')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-7">
    @foreach($carts as $cart)
    <div class="card mb-3" style="max-width: 540px; max-height: 180px;">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="{{ asset('/images/' . $cart->item->image_path) }}" width="100%" height="180px" style="margin: 0;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><div>{{$cart->item->name}}</div></h5>
                    <div>{{$cart->item->fee}}円</div>
                    <div>{{$cart->quantity}}個</div>
                    <div>小計{{$cart->item->fee * $cart->quantity}}円</div>
                    <div>
                        <form style="display: inline-block;" method="POST" action="{{action('CartController@destroy',$cart->id)}}">
                            @csrf
                            @method('DELETE')
                            <button><i class="fas fa-times mr-1"></i>削除</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
    </div>
    <div class="col-5">
      <div class="card">
       <div class="card-body">
         <h4 class="card-title font-weight-bold">お支払い金額</h4>
          <h6 class="mb-2">注文合計金額 {{$total}}円</h6>
            <p class="card-text">
            </p>
        <a href="/buy" class="btn">レジに進む</a>
        <a href="/item" class="sub-btn">買い物を続ける</a>
      </div>
    </div>

    </div>
  </div>
</div>




@endsection
@include('layouts.footer')
