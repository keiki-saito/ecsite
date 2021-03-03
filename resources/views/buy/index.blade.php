@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-bottom:10px;">
            <div class="col-md-8">
                <div class="card">
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

                            <div class="form-row mb-1">
                                <div class="form-group col-md-6">
                                    <label for="address">登録済みの住所を使う</label>
                                    @if(Request::has('confirm'))
                                        <p class="form-control-static">{{ old('address') }}</p>
                                        <input id="address" type="hidden" name="address" value="{{ old('address') }}">
                                    @else
                                    <select name="address" id="address">
                                        <option value="">-</option>
                                        <!-- old('address')と$user->addressの値が同じだったらselectedにする -->
                                        <option value="{{$user->address}}" @if (  old('address')  ==  $user->address  ) selected @endif >
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

                            <p>新しい住所を追加する</p>
                            <div class="form-row mb-1">
                                <div class="form-group col-md-6">
                                    <label for="sub_address">住所2</label>
                                    @if(Request::has('confirm'))
                                        <p class="form-control-static">{{ old('sub_address') }}</p>
                                        <input id="sub_address" type="hidden" name="sub_address" value="{{ old('sub_address') }}">
                                    @else
                                        <input id="sub_address" type="text" class="form-control" name="sub_address" value="{{ old('sub_address') ?  old('sub_address') : ''}}">
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
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @foreach ($carts as $cart)
                        <div class="card-header">
                            {{ $cart->item->name }}
                        </div>
                        <div class="card-body">
                            <div>
                                {{ $cart->item->fee }}円
                            </div>
                            <div>
                                {{ $cart->quantity }}個
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
