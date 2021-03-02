@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">商品一覧</div>
		<div class="card-body">

			<ul class="list-group">
				@foreach ($item_list as $item)
				<li class="list-group-item">
					<a href="{{ url('admin/item/' . $item->id) }}">
						{{ $item->name }}
					</a>
				</li>
				@endforeach
			</ul>

			<div class="mt-3">
				{{ $item_list->links() }}
			</div>

		</div>
	</div>
</div>
@endsection​
