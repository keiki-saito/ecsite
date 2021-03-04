@extends('layouts.app')

@section('content')
    <div class="form-container" style="margin: 0 auto;">
        <div style="margin-bottom:150px; width:1000px;">
                <div class="card" width="1200px">
                    <div class="card-header">
                        お届け先入力
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/buy">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">氏名</label>
                                    @if(Request::has('confirm'))
                                        <p class="form-control-static">{{ old('name') }}</p>
                                        <input id="name" type="hidden" name="name" value="{{ old('name') }}">
                                    @else
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ?  old('name') : $user->name }}">
                                    @endif
                                </div>
                            </div>
                            @if(!Request::has('confirm'))

                                <label>
                                    <input name="type" type="radio" value="registered">登録済みの住所を使う
                                </label>
                                <label>
                                    <input name="type" type="radio" value="new">新しい住所を追加する
                                </label>
                            @endif
                            <div class="form-row mb-1 address">
                                <div class="form-group col-md-6">
                                    @if(Request::has('confirm'))
                                       <label for="address">住所</label>
                                        <p class="form-control-static">{{ old('address') }}</p>
                                        <input id="address" type="hidden" name="address" value="{{ old('address') }}">
                                    @else
                                    <select name="address" id="address-radio">
                                        <option value="">-</option>
                                        <!-- old('address')と$user->addressの値が同じだったらselectedにする -->
                                        <option value="{{$user->address}}" @if (  old('address')  ==  $user->address  ) selected @endif  >
                                            {{$user->address}}
                                        </option>
                                        @if($subAddresses)
                                          @foreach($subAddresses as $subAddress)
                                          <!-- old('address')と$subAddress->sub_addressの値が同じだったらselectedにする -->
                                            <option value="{{$subAddress->sub_address}}" @if (  old('address')  ==  $subAddress->sub_address  ) selected @endif >
                                                {{$subAddress->sub_address}}
                                            </option>
                                          @endforeach
                                        @endif
                                    </select>

                                    @endif
                                </div>
                            </div>


                            <div class="form-row mb-1 sub-address">
                                <div class="form-group col-md-6">
                                    @if(Request::has('confirm'))
                                    <p class="form-control-static">{{ old('sub_address') }}</p>
                                    <input id="sub_address" type="hidden" name="sub_address" value="{{ old('sub_address') }}">
                                    @else
                                    <div id="subAddress-radio" >
                                        <p>新しい住所を追加する</p>
                                          <input type="text" id="search-word" class="zipcode-search">
                                          <button id="search-btn" type="button">検索する</button>
                                            <label for="sub_address">住所2</label>
                                            <input  id="sub_address" type="text" class="form-control" name="sub_address" value="{{ old('sub_address') ?  old('sub_address') : ''}}">
                                    </div>
                                    @endif
                                </div>
                            </div>


                            <div class="form-row mb-1">
                                <div class="form-group col-md-6">
                                    <label for="phone_number">電話番号</label>
                                    @if(Request::has('confirm'))
                                        <p class="form-control-static">{{ old('phone_number') }}</p>
                                        <input id="phone_number" type="hidden" name="phone_number" value="{{ old('phone_number') }}">
                                    @else
                                        <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{$user->phone_number}}">
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    @if(Request::has('confirm'))
                                        <button type="submit" class="btn" name="post">注文を確定する</button>
                                        <button type="submit" class="btn" name="back">修正する</button>
                                    @else
                                        <button type="submit" class="btn" name="confirm">入力内容を確認する</button>
                                    @endif
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


            @foreach($carts as $cart)
            <div class="cart_item">
                    <div class="cart_item_image">
                        <img src="{{ asset('/images/' . $cart->item->image_path) }}" width="130px">
                        <div>{{$cart->item->name}}</div>
                    </div>
                    <div class="cart_item_info">
                        <div><span class="mr-3">数量：{{$cart->quantity}}個</span>{{$cart->item->fee * $cart->quantity}}円</div>
                    </div>
            </div>
            <hr>
            @endforeach
            <div class="total">合計金額：{{$total}}円</div>
        </div>
    </div>



@endsection
