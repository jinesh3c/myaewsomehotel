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
		   					<h2>Accomodation</h2>
		   					<h1>Our Amenities</h1>
		   				</div>
		   			</div>
		   		</div>
	   		</div>
	   	</li>
	  	</ul>
  	</div>
</aside>
<div id="colorlib-amenities">
	<div class="container">
		<div class="row">
			<div class="amenities-flex">
				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/amenities-1.jpg')}});"></div>
				<div class="desc animate-box">
					<h2><a href="#">Airport Shuttle &amp; Parking Lot</a></h2>
					<p class="price">
						<span class="free">Free</span>
					</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptates eius, nam laudantium, quasi laborum cumque asperiores totam est perferendis itaque id esse quidem recusandae sequi aut? Ratione, enim, consequatur!</p>
				</div>
				<div class="desc animate-box">
					<h2><a href="#">Room Service </a></h2>
					<p class="price">
						<span class="free">Free</span>
					</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptates eius, nam laudantium, quasi laborum cumque asperiores totam est perferendis itaque id esse quidem recusandae sequi aut? Ratione, enim, consequatur!</p>
				</div>
				<div class="amenities-img animate-box" style="background-image: url(images/room-5.jpg);"></div>
				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/amenities-2.jpg')}});"></div>
				<div class="desc animate-box">
					<h2><a href="#">SPA &amp; Beauty Centre</a></h2>
					<p class="price">
						<span class="currency">$</span>
						<span class="price-room">59</span>
						<span class="per">/ per person</span>
					</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptates eius, nam laudantium, quasi laborum cumque asperiores totam est perferendis itaque id esse quidem recusandae sequi aut? Ratione, enim, consequatur!</p>
				</div>
				<div class="desc animate-box">
					<h2><a href="#">Conference Hall for Business Events</a></h2>
					<p class="price">
						<span class="currency">$</span>
						<span class="price-room">359</span>
						<span class="per">/ per night / room</span>
					</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptates eius, nam laudantium, quasi laborum cumque asperiores totam est perferendis itaque id esse quidem recusandae sequi aut? Ratione, enim, consequatur!</p>
				</div>
				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/amenities-3.jpg')}});"></div>
			</div>
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
@endsection('content')