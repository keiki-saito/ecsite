@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
  <form  method="POST" action="{{ route('item_create') }}">
      @csrf

    <p class="title">商品情報編集</p>
    <div class="form-group">

         <input type="text" placeholder="名前" name="name" autofocus  class="form-control">

    @error('name')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror
    </div>
    <div class="form-group">
        <textarea  type="text" placeholder="商品説明" name="detail" rows="4" cols="40" class="form-control"></textarea>

        @error('detail')
            <span class="error" role="alert">
                <p>{{ $message }}</p>
            </span>
        @enderror
    </div>

    <div class="form-group">
    <input  type="text" placeholder="在庫数" name="stock"  class="form-control"/>

    @error('stock')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror
    </div>

    <div class="form-group">
        <input type="text" placeholder="画像パス" name="image_path" class="form-control">
    </div>

    <select name="category_id" id="category_id" class="category_select">
            @foreach($categories as $id=>$category)
                <option value="{{$id}}" >{{$category}}</option>
            @endforeach
    </select>

    <div class="form-group">
    <input  type="text" placeholder="金額" name="fee"  class="form-control"/>

    @error('fee')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror
    </div>


    <button type="submit">新規作成</button>
  </form>


</div>

</div>

@endsection

