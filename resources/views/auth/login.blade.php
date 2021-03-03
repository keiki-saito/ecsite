@extends('layouts.app')

@section('content')
<div class="wrapper">
  <form class="login" method="POST" action="{{ route('login') }}">
      @csrf
    <p class="title">ログイン</p>
    <input  type="text" placeholder="Email" name="email" autofocus/>
    <i class="fa fa-envelope"></i>

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input type="password" placeholder="Password" name="password"/>
    <i class="fa fa-key"></i>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <button type="submit">ログイン</button>
  </form>

  </p>
</div>


@endsection
