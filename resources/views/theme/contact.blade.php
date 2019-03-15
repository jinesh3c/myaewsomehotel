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
		   					<h2>Get in touch</h2>
		   					<h1>Book / Contact Us</h1>
		   				</div>
		   			</div>
		   		</div>
	   		</div>
	   	</li>
	  	</ul>
  	</div>
</aside>

<div id="colorlib-reservation">
    <div class="container">
        <div class="row">
            <div class="col-md-12 search-wrap">
                <form method="post" action="{{route('book')}}" class="colorlib-form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="date">Check-in:</label>
                    <div class="form-field">
                      <i class="icon icon-calendar2"></i>
                      <input type="text" name="check_in" id="date" class="form-control date" placeholder="Check-in date" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="date">Check-out:</label>
                    <div class="form-field">
                      <i class="icon icon-calendar2"></i>
                      <input type="text" name="check_out" id="date" class="form-control date" placeholder="Check-out date" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="room">Room</label>
                    <div class="form-field">
                      <i class="icon icon-arrow-down3"></i>
                      <select name="room_id" id="room" class="form-control" required>
                        @foreach($rooms as $room)
                            <option style="color:#000" value="{{$room->id}}">{{$room->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="type">Type</label>
                    <div class="form-field">
                      <i class="icon icon-arrow-down3"></i>
                      <select name="type" id="people" class="form-control" required>
                        <option value="single" style="color:#000">Single</option>
                        <option value="couple" style="color:#000">Couple</option>
                        <option value="family" style="color:#000">Family</option>
                        <option value="group" style="color:#000">Group</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Name">Name:</label>
                    <div class="form-field">
                      <input type="text" name="name" class="form-control" placeholder="Booking user name" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Name">Phone:</label>
                    <div class="form-field">
                      <input type="text" name="phone"  class="form-control" placeholder="Booking user phone" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Name">Email:</label>
                    <div class="form-field">
                      <input type="email" name="email" class="form-control" placeholder="Booking user email" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <input type="submit" name="submit" id="submit" value="Book" class="btn btn-primary btn-block">
                </div>
              </div>
            </form>
            </div>
        </div>
    </div>
</div>

<div id="colorlib-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 animate-box">
				<h3>Contact Information</h3>
				<div class="row contact-info-wrap">
					<div class="col-md-3">
						<p><span><i class="icon-location-2"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
					</div>
					<div class="col-md-3">
						<p><span><i class="icon-phone3"></i></span> <a href="tel://9842089687">+ 9842089687</a></p>
					</div>
					<div class="col-md-3">
						<p><span><i class="icon-paperplane"></i></span> <a href="mailto:jinesh1094@gmail.com">jinesh1094@gmail.com</a></p>
					</div>
					<div class="col-md-3">
						<p><span><i class="icon-globe"></i></span> <a href="#">luxehotel.com</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1 animate-box">
				<h3>Get In Touch</h3>
				<form action="{{route('message')}}" method="post">
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<div class="row form-group">
						<div class="col-md-6">
							<label for="fname">First Name</label>
							<input type="text" name="fname" id="fname" class="form-control" placeholder="Your firstname" required>
						</div>
						<div class="col-md-6">
							<label for="lname">Last Name</label>
							<input type="text" name="lname" id="lname" class="form-control" placeholder="Your lastname" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Your email address" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="subject">Subject</label>
							<input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject of this message">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="message">Message</label>
							<textarea name="message" name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" required></textarea>
						</div>
					</div>
					<div class="form-group text-center">
						<input type="submit" value="Send Message" class="btn btn-primary">
					</div>

				</form>		
			</div>
		</div>
	</div>
</div>

<!-- Map -->
	<div class="map text-center">
		{{-- <div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="{{asset('frontend/images/icons/pin.png')}}" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div> --}}
		<iframe class="size-303" id="google_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7034.934095703685!2d84.05367142539995!3d28.162708230421945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995bd826606bfad%3A0xc8e3b8d62d5de765!2sTalchowk%2C+Lekhnath+33700!5e0!3m2!1sen!2snp!4v1550151420919" width="90%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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