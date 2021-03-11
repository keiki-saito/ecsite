@extends('layouts.admin')
@section('content')
@foreach($main_order->orders as $order)
<div class="show-page-item" style="margin: 0 auto;">
<div class="card mb-3" style="max-width: 550px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img class="show-page-card-img" src="{{ asset('/images/' . $order->item->image_path) }}" width="100%" height="150">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$order->item->name}}</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
</div>
</div>
@endforeach

@endsection

