@extends('layouts.admin')

@section('content')
<div class="container">
    <div>ユーザー一覧</div>
    @foreach ($user_list as $user)
    <div>
        <a href="{{ url('admin/user/' . $user->id) }}">
            {{ $user->name }}
        </a>
    </div>
    
    @endforeach
</div>





</div>

@endsection​
