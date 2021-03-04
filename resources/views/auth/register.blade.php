@extends('layouts.app')

@section('content')
<div class="wrapper">
  <form class="signup" method="POST" action="{{ route('register') }}">
      @csrf
    <p class="title">新規登録</p>

    <input type="text" placeholder="名前" name="name" autofocus >
    <i class="fa fa-user"></i>
    @error('name')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror

    <input  type="text" placeholder="Email" name="email" />
    <i class="fa fa-envelope"></i>
    @error('email')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror

    <input  type="text" placeholder="電話番号" name="phone_number"/>
    <i class="fa fa-phone"></i>
    @error('phone_number')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror

    <input type="text" id="search-word" class="zipcode-search" >
    <button id="search-btn" type="button">検索する</button>
    <input  type="text" id="address" placeholder="住所" name="address" />
    <i class="fa fa-house-user"></i>
    @error('address')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror



    <input type="password" placeholder="パスワード" name="password" />
    <i class="fa fa-key"></i>
    @error('password')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror

    <input type="password" placeholder="パスワード確認" name="password_confirmation" />
    <i class="fa fa-key"></i>
    @error('password_confirmation')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror

    <button type="submit">新規登録</button>
  </form>

  </p>
</div>
@endsection
