@extends('layouts.app')

@include('layouts.header')

@section('content')

<div class="slideshow">
    <div class="slide-item">
        <img src="{{asset('/images/top_image01.jpg')}}" width="1600" height="700">
        <p class="top_title">Selected Furniture</p>
    </div>

    <div class="slide-item">
        <img src="{{asset('/images/top_image02.jpg')}}" width="1600" height="700">
        <p class="top_title">Selected Furniture</p>
    </div>
    <div class="slide-item">
        <img src="{{asset('/images/top_image06.jpg')}}" width="1600" height="700">
        <p>Selected Furniture</p>
    </div>
    <div class="slide-item">
        <img src="{{asset('/images/top_image04.jpg')}}" width="1600" height="700">
        <p>Selected Furniture</p>
    </div>
</div>

<div class="container">
<div class="fadein mb-4">
    <p class="ml-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <img src="{{asset('/images/top_image05.jpg')}}" alt="">
</div>
<div class="fadein mb-4">
<p class="mr-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <img src="{{asset('/images/top_image03.jpg')}}" alt="">
</div>
<div class="fadein mb-4">
<p class="ml-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <img src="{{asset('/images/top_image05.jpg')}}" alt="">
</div>
</div>



@endsection

@include('layouts.footer')
