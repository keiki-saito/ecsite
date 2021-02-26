@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <div class="mx-auto" style="max-width: 1200px;">
                <h1 class="text-center font-weight-bold">{{Auth::user()->name}}さんご購入ありがとうございました</h1>
            </div>
            <div class="text-center">
                <p>ご登録頂いたメールアドレスへ決済情報をお送りいたします。お手続き完了次第商品を発送いたします</p>
                <a href="/">ホームへ戻る</a>
            </div>

        </div>
    </div>
@endsection
