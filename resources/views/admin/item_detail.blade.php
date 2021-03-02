@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">
			<a href="{{ url('admin/item_list') }}">商品一覧</a> &gt; 商品詳細
		</div>
		<div class="card-body">

			<ul class="list-group">
				<li class="list-group-item">商品名: {{ $item->name }}</li>
				<li class="list-group-item">詳細: {{ $item->detail }}</li>
				<li class="list-group-item">金額：{{$item->fee}}</li>
			</ul>
		</div>
	</div>
</div>
@endsection
