@extends('layouts.admin')
@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">
			<a href="{{ url('admin/item_list') }}">商品一覧</a> &gt; 商品詳細
		</div>
		<div class="card-body">
				<div>商品名: {{ $item->name }}</div>
				<div>詳細: {{ $item->detail }}</div>
				<div>金額：{{$item->fee}}円</div>
                <div>在庫：{{$item->stock}}個</div>
		</div>
        <a href="/admin/item/{{$item->id}}/edit">編集する</a>
	</div>
</div>
@endsection
