@extends('layouts.app')
@include('layouts.header')

@section('content')
<div class="wrapper">
  <form class="edit" method="POST" action="{{ route('user.update', $user->id) }}">
      @csrf
      @method('PUT')
    <p class="title">ユーザー情報編集</p>

    <input type="text" placeholder="名前" name="name" autofocus value="{{$user->name}}">
    <i class="fa fa-user"></i>
    @error('name')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror

    <input  type="text" placeholder="Email" name="email"  value="{{$user->email}}"/>
    <i class="fa fa-envelope"></i>
    @error('email')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror

    <input  type="text" placeholder="電話番号" name="phone_number" value="{{$user->phone_number}}"/>
    <i class="fa fa-phone"></i>
    @error('phone_number')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror


    <input  type="text" placeholder="住所" name="address" value="{{$user->address}}"/>
    <i class="fa fa-house-user"></i>
    @error('address')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror

    <button type="submit">編集</button>
  </form>

  </p>
</div>
@endsection

@include('layouts.footer')
