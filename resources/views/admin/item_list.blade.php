@extends('layouts.admin')

@section('content')
<div class="container">

		@foreach ($item_list as $item)
        <div>
            <a href="{{ url('admin/item/' . $item->id) }}">
				{{ $item->name }}
			</a>

        </div>
        @endforeach


	<div>
		{{ $item_list->links() }}
	</div>


</div>
@endsection​
