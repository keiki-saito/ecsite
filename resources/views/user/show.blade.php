{{$user->name}}
{{$user->email}}
購入履歴
@foreach($orders as $order)
    {{$order->item->name}}
    {{$order->item->detail}}
    <img src="{{ asset('/images/' . $order->item->image_path) }}" >
    {{$order->fee}}
@endforeach
