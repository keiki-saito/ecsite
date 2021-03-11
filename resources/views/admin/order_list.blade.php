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
        @foreach($MainOrders as $MainOrder)
        <tr>
            <td>{{$MainOrder->user->name}}</td>
            <td>{{$MainOrder->created_at}}</td>
            <td>{{$MainOrder->total}}円</td>
            <td><a href="{{url('/admin/order/'.$MainOrder->id)}}">購入詳細</a></td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
