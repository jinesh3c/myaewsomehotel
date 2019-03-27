@extends('layouts.app')
@section('content')
<aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
	   	<li style="background-image: url({{asset('theme/images/about.png')}});">
	   		<div class="overlay"></div>
	   		<div class="container-fluid">
	   			<div class="row">
		   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
		   				<div class="slider-text-inner slider-text-inner2 text-center">
		   					<h2>Information</h2>
		   					<h1>About Us</h1>
		   				</div>
		   			</div>
		   		</div>
	   		</div>
	   	</li>
	  	</ul>
  	</div>
</aside>
<div id="colorlib-about">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="about animate-box">
					<h2>Welcome to our Hotel</h2>
					<p>The Hotel <b>Lekhnath View Tower</b> is the right choice for visitors who are searching for a combination of charm, peace and quiet, and a convenient position from which to explore Lake Side. It is a small, comfortable hotel, situated on the pachbhaiya, pokhara -31;. The Derai family and their staff offer an attentive, personalized service and are always available to offer any help to guests.
                        The hotel is arranged on two floors, without a lift. On the ground floor, apart from the reception, there is a comfortable lounge where you can sit and drink tea, or just read. There is also a splendid terrace, where, you can relax and immerge yourself from morning onwards in the atmosphere of Pokhara daily life
                        The rooms are arranged on the first and second. On the top floor, there is also a delightful terrace or solarium available for the use of guests, from where you can enjoy the wonderful view.
                        The breakfast is served in the lounge on the ground floor, and also outside during the summer months.</p>
				</div>
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="{{asset('theme/images/about.png')}}" alt="Free HTML5 Bootstrap Template by colorlib.com">
			</div>
		</div>
	</div>
</div>

<div id="colorlib-testimony" class="colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                <h2>Our Satisfied Guests says</h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
        <div class="col-md-4 animate-box">
            <div class="testimony text-center">
                <span class="img-user" style="background-image: url({{('theme/images/person2.jpg')}});"></span>
                <span class="user">Brian Doe</span>
                <small>Satisfied Customer</small>
                <blockquote>
                    <p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </blockquote>
            </div>
        </div>
        <div class="col-md-4 animate-box">
            <div class="testimony text-center">
                <span class="img-user" style="background-image: url({{('theme/images/person1.jpg')}});"></span>
                <span class="user">Nathalie Miller</span>
                <small>Satisfied Customer</small>
                <blockquote>
                    <p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </blockquote>
            </div>
        </div>
        <div class="col-md-4 animate-box">
            <div class="testimony text-center">
                <span class="img-user" style="background-image: url({{('theme/images/person3.jpg')}});"></span>
                <span class="user">Shara Jones</span>
                <small>Satisfied Customer</small>
                <blockquote>
                    <p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </blockquote>
            </div>
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
@endsection