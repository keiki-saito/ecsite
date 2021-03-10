@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
  <form  method="POST" action="{{ route('admin.item.update', $item->id) }}">
      @csrf
      @method('PUT')
    <p class="title">商品情報編集</p>
    <div class="form-group">

         <input type="text" placeholder="名前" name="name" autofocus value="{{$item->name}}" class="form-control">

    @error('name')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror
    </div>
    <div class="form-group">
        <textarea  type="text" placeholder="Email" name="detail" rows="4" cols="40" class="form-control">{{$item->detail}}</textarea>

        @error('detail')
            <span class="error" role="alert">
                <p>{{ $message }}</p>
            </span>
        @enderror
    </div>

    <div class="form-group">
    <input  type="text" placeholder="" name="stock" value="{{$item->stock}}" class="form-control"/>

    @error('stock')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror
    </div>

    <div class="form-group">
    <input  type="text" placeholder="住所" name="fee" value="{{$item->fee}}" class="form-control"/>

    @error('fee')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror
    </div>


    <button type="submit">編集</button>
  </form>


</div>

</div>

@endsection

