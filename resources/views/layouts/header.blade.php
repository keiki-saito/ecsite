@section('header')
<div class="header">
<!-- <a class="my-0 mr-md-auto header-title" href="/">タイトル</a> -->
<div class="header-sub">  <!--header-sub-->
    <span class="header-item">
        @if(Auth::check())
            <a class="header-link"  href="/user">ユーザーページ |</a>
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
        <a class="header-link" href="{{ route('register') }}">新規登録 |</a>
        <a class="header-link" href="{{ route('login') }}">ログイン</a>
    @endif
    </div><!--header-sub-->

    <div class="header-main"> <!--header-main-->
        <ul>
            <li ><a href="/item" class="header-main-item">商品一覧</a></li>
            <li><a href="" class="header-main-item">ABOUT</a></li>
            <li><a class="title" href="/">タイトル</a></li>
            <li><a href="" class="header-main-item">NEWS</a></li>
            <li><a href="/cart" class="header-main-item">カートを見る</a></li>
        </ul>
    </div> <!--header-sub-->
</div>



@endsection
