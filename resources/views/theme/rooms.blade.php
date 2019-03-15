@extends('layouts.app')
@section('content')
<aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
	   	<li style="background-image: url({{asset('theme/images/img_bg_5.jpg')}});">
	   		<div class="overlay"></div>
	   		<div class="container-fluid">
	   			<div class="row">
		   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
		   				<div class="slider-text-inner slider-text-inner2 text-center">
		   					<h2>Choose our Best</h2>
		   					<h1>Rooms &amp; Suites</h1>
		   				</div>
		   			</div>
		   		</div>
	   		</div>
	   	</li>
	  	</ul>
  	</div>
</aside>

<div id="colorlib-rooms" class="colorlib-light-grey">
	<div class="container">
		<div class="row ">
			@if(count($rooms)<1)
			<p class="text-center">NO ROOM FOUND!</p>
			@else
			@foreach($rooms as $room)
			<div class="col-md-4 room-wrap animate-box row-eq-height">
				<a href="{{url($room->image_path)}}" class="room image-popup-link" style="background-image: url({{url($room->image_path)}});"></a>
				<div class="desc text-center">
					<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
					<h3><a href="{{route('rooms')}}">{{$room->name}}</a></h3>
					<p class="price">
						<span class="currency">NPR</span>
						<span class="price-room">{{$room->price}}</span>
						<span class="per">/ per night</span>
					</p>
					<ul>
						{!! $room->facility !!}
						{{-- <li><i class="icon-check"></i> Only 10 rooms are available</li>
						<li><i class="icon-check"></i> Breakfast included</li>
						<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li> --}}
					</ul>
					{{-- <p><a class="btn btn-primary">Book now!</a></p> --}}
				</div>
			</div>
			@endforeach
			@endif
		</div>
	</div>
</div>

<div id="colorlib-subscribe" style="background-image: url({{asset('theme/images/img_bg_2.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                <h2>Thank You For Visiting</h2>
                <p>Get A 50% Discounts in every Rooms, Book now!</p>
                <a href="{{route('contact')}}" class="btn btn-primary">Book Now</a>
            </div>
        </div>
    </div>
</div>
@endsection