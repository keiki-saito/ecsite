@extends('layouts.app')

@section('content')
    <h1>{{Auth::user()->name}}様</h1>
    ご注文ありがとうございました。
    発送準備が完了次第、指定の住所にお送りいたします。
@endsection
