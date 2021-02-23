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
      </div>
    </div>
  </div>
</div>
</div>


@endsection



@include('layouts.footer')
