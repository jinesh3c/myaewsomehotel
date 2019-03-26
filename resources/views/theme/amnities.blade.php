@extends('layouts.app')
@section('content')
<aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
	   	<li style="background-image: url({{asset('theme/images/slider5.jpg')}});">
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
				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/parking.jpg')}});"></div>
				<div class="desc animate-box">
					<h2><a href="#">Airport Shuttle &amp; Parking Lot</a></h2>
					<p class="price">
						<span class="free">Free</span>
					</p>
					<p>
						The day you feel like you've won, you need to drive out of the parking lot and not come back.
					</p>
				</div>
				<div class="desc animate-box">
					<h2><a href="#">Room Service </a></h2>
					<p class="price">
						<span class="free">Free</span>
					</p>
					<p>This is an elegant hotel! Room service has an unlisted number.</p>
				</div>
				<div class="amenities-img animate-box" style="background-image: url(theme/images/service.jpg);"></div>
				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/desk.jpg')}});"></div>
				<div class="desc animate-box">
					<h2><a href="#">24/7 &amp; Front Desk</a></h2>
					<p class="price">
						<span class="currency">$</span>
						<span class="price-room">5</span>
						<span class="per">/ per night</span>
					</p>
					<p>
						If the world is in complete flux for me and life is falling apart, if I just manage to get myself in front of a computer or at my desk, it calms.
					</p>
				</div>
				<div class="desc animate-box">
					<h2><a href="#">Picnic &amp; Barbeque</a></h2>
					<p class="price">
						<span class="currency">$</span>
						<span class="price-room">2</span>
						<span class="per">/ per plate</span>
					</p>
					<p>
						If you look at tailgating, everyone does it. It's for everyone who likes to cook outdoors.
					</p>
				</div>
				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/picnic.jpg')}});"></div>
			</div>
		</div>
	</div>
</div>
<div id="colorlib-subscribe" style="background-image: url({{asset('theme/images/banner.jpg')}});">
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