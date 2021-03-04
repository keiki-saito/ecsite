@extends('layouts.app')

@section('content')
<div class="wrapper">
  <form class="login" method="POST" action="{{ route('login') }}">
      @csrf
    <p class="title">ログイン</p>
    <input  type="text" placeholder="Email" name="email" autofocus/>
    <i class="fa fa-envelope"></i>
    @error('email')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror

    <input type="password" placeholder="パスワード" name="password"/>
    <i class="fa fa-key"></i>
    @error('password')
        <span class="error" role="alert">
            <p>{{ $message }}</p>
        </span>
    @enderror
    <button type="submit">ログイン</button>
  </form>

  </p>
</div>


@endsection
