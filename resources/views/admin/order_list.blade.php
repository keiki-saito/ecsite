@extends('layouts.admin')

@section('content')
<table border="1">
    <thead>
        <tr>
            <th>購入者</th>
            <th>購入日</th>
            <th>合計金額</th>
            <th>詳細</th>
        </tr>
    </thead>
    <tbody>
        @foreach($main_orders as $main_order)
        <tr>
            <td>{{$main_order->user->name}}</td>
            <td>{{$main_order->created_at}}</td>
            <td>{{$main_order->total}}円</td>
            <td><a href="{{url('/admin/order/'.$main_order->id)}}">購入詳細</a></td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
