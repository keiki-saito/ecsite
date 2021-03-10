@extends('layouts.admin')

@section('content')
<table border="1">
    <thead>
        <tr>
            <th>購入者</th>
            <th>商品名</th>
            <th>価格</th>
            <th>購入日</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
           <td>{{$order->user->name}}</td>
           <td><a href="/admin/item/{{$order->item->id}}">{{$order->item->name}}</a></td>
           <td>{{$order->item->fee * $order->quantity}}円({{$order->quantity}}個)</td>
           <td>{{$order->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
