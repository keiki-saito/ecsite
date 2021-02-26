@extends('layouts.app')
@include('layouts.header')

@section('content')
@foreach($carts as $cart)
    {{$cart->item->name}}
    {{$cart->quantity}}
@endforeach
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  Button
</button>

<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
  <i class="material-icons">add</i>
</button>

@endsection
@include('layouts.footer')
