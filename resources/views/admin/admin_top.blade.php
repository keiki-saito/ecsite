@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">管理側TOP</div>
		<div class="card-body">
			<div>
				<a href="{{ url('admin/user_list') }}" class="btn">ユーザー一覧</a>
			</div>
            <div>
                <a href="{{url('admin/item_list') }}" class="btn">商品一覧</a>
            </div>
            <div>
                <a href="{{url('admin/add' )}}" class="btn">新規追加</a>
            </div>
            <div>
                <a href="{{ url('admin/order_list') }}">購入情報</a>
            </div>

			<form method="post" action="{{ url('admin/logout') }}">
				@csrf
				<input type="submit" class="btn" value="ログアウト" />
			</form>
		</div>
	</div>
</div>
@endsection
