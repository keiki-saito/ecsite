@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="search" style="margin: 0 auto;">
        <form id="search_form" method="GET" action="/admin/item_list">
            <div class="input-group">
                <div class="input-group-prepend">
                    <select name="category_id" id="category_id" class="category_select">
                        @foreach($categories as $id=>$category)
                        <option value="{{$id}}" @if($category_id ==  $id) selected @endif >{{$category}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="text" name="keyword" class="search-box" style="width: 200px;">
                <button class="search-btn ml-2" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>

    </div>


    @foreach ($items as $item)
    <div>
        <a href="{{ url('admin/item/' . $item->id) }}">
            {{ $item->name }}
        </a>

    </div>
    @endforeach


</div>
@endsection​
