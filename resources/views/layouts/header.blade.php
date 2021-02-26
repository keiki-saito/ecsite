@section('header')
<div class="header">
<!-- <a class="my-0 mr-md-auto header-title" href="/">タイトル</a> -->
<div class="header-sub">
    <span class="header-item">
        @if(Auth::check())
            <a class="header-link"  href="/item">カートを見る |</a>
        @endif


    @if(Auth::check())

        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="header-link">
            ログアウト
        </a>
    </span>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @else
    <a class="header-link mr-3" href="{{ route('register') }}">新規登録</a>
    <a class="header-link" href="{{ route('login') }}">ログイン</a>
    @endif
    </div>


    <div class="header-main">

        <ul>
            <li ><a href="/item" class="header-main-item">商品一覧</a></li>
            <li><a href="" class="header-main-item">ABOUT</a></li>
            <li><a class="title" href="/">タイトル</a></li>
            <li><a href="" class="header-main-item">NEWS</a></li>
            <li><a href="" class="header-main-item">特徴</a></li>
        </ul>
    </div>
</div>



@endsection
