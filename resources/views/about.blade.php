@extends('layouts.app')
@include('layouts.header')

@section('content')
<div class="about-container">
    <h1 class="about-page-title">About</h1>
    <img src="{{asset('/images/aboutpage_image.jpg')}}" width="1300" height="590" class="about-img">
    <div class="text-center about-text">はじめまして。Selected Furnitureです。<br>「いろんなサイトが合って困ってしまう」「忙しくて家具探しをしている暇が無い」そんな方々が「1サイトで家具探しを完結させられる」をコンセプトに作られたECサイトです。<br>商品すべてのデザインや使い心地まで厳選しました。きっとあなたが必要としている商品が見つかるでしょう。</div>


    <div class="card mb-3" style="max-width: 1100px; margin :0 auto;">
     <div class="row no-gutters">
        <div class="col-md-6">
           <img class="show-page-card-img" src="{{asset('/images/aboutpage_image02.jpg')}}" width="100%" height="250px">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <p class="card-text text-center">Selected Furnitureは<br>数多くのサイトから厳選した家具を揃えています。<br>家具探しを当サイトのみで完結することが可能です。</p>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="pickup text-center">PickUp Item</div>
        <div class="row">
        <div class="col-3">
            <img src="{{asset('/images/'. $item01->image_path)}}" width="100%">
            <div style="text-align :center;">
                {{$item01->fee}}円<br>
                {{$item01->name}}
            </div>
        </div>
        <div class="col-3">
            <img src="{{asset('/images/'.$item02->image_path)}}" width="100%">
            <div style="text-align :center;">
                {{$item02->fee}}円<br>
                {{$item02->name}}
            </div>

        </div>
        <div class="col-3">
            <img src="{{asset('/images/'.$item03->image_path)}}" width="100%">
            <div style="text-align :center;">
                {{$item03->fee}}円<br>
                {{$item03->name}}
            </div>
        </div>
        <div class="col-3">
            <img src="{{asset('/images/'. $item04->image_path)}}" width="100%">
            <div style="text-align :center;">
                {{$item04->fee}}円<br>
                {{$item04->name}}
            </div>
        </div>
        </div>
    </div>
</div>
@endsection

@include('layouts.footer')
