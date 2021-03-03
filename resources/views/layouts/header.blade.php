@section('header')
<div class="header">
<!-- <a class="my-0 mr-md-auto header-title" href="/">タイトル</a> -->
<div class="header-sub">  <!--header-sub-->
    <span class="header-item">
        @if(Auth::check())
            <a class="header-link pr-1"  href="/user/{{Auth::id()}}">ユーザーページ</a><span style="color: #BD996D;">|</span>
        @endif


    @if(Auth::check())

        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="header-link pl-1">
            ログアウト
        </a>
    </span>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @else
        <a class="header-link pr-1" href="{{ route('register') }}">新規登録</a><span style="color: #BD996D;">|</span>
        <a class="header-link pl-1" href="{{ route('login') }}">ログイン</a>
    @endif
    </div><!--header-sub-->

    <div class="header-main"> <!--header-main-->
        <ul>
            <li ><a href="/item" class="header-main-item">商品一覧</a></li>
            <li><a href="/about" class="header-main-item">ABOUT</a></li>
            <li><a class="title" href="/"><img src="{{asset('images/logo.png')}}" width="200px" height="150px"></a></li>
            <li><a href="" class="header-main-item">NEWS</a></li>
            <li><a href="/cart" class="header-main-item">カートを見る</a></li>
        </ul>
    </div> <!--header-sub-->

</div>



@endsection
