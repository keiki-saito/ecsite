@extends('layouts.app')
@include('layouts.header')

@section('content')
<div class="about-container">
    <h1 class="about-page-title">About</h1>
    <img src="{{asset('/images/aboutpage_image.jpg')}}" width="1300" height="590" class="about-img">
    <div class="text-center about-text">はじめまして。Selected Furnitureです。<br>「いろんなサイトが合って困ってしまう」「忙しくて家具探しをしている暇が無い」そんな方々が「1サイトで家具探しを完結させられる」をコンセプトに作られたECサイトです。<br>商品すべてのデザインや使い心地まで厳選しました。きっとあなたが必要としている商品が見つかるでしょう。</div>

    <div class="container">
        <div class="pickup text-center">PickUp Item</div>
        <div class="row">
        <div class="col-3">
            <img src="{{asset('/images/'. $item01->image_path)}}" width="100%">
            <div style="text-align :center;">
                {{$item01->name}}<br>
                {{$item01->fee}}円
            </div>
        </div>
        <div class="col-3">
            <img src="{{asset('/images/'.$item02->image_path)}}" width="100%">
            <div style="text-align :center;">
                {{$item02->name}}<br>
                {{$item02->fee}}円
            </div>

        </div>
        <div class="col-3">
            <img src="{{asset('/images/'.$item03->image_path)}}" width="100%">
            <div style="text-align :center;">
                {{$item03->name}}<br>
                {{$item03->fee}}円
            </div>
        </div>
        <div class="col-3">
            <img src="{{asset('/images/'. $item04->image_path)}}" width="100%">
            <div style="text-align :center;">
                {{$item04->name}}<br>
                {{$item04->fee}}円
            </div>
        </div>
        </div>
    </div>
</div>
@endsection

@include('layouts.footer')
