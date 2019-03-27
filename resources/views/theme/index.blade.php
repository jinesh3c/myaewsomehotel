@extends('layouts.app')
@section('content')
<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
        <li style="background-image: url({{asset('theme/images/slider1.jpg')}});">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                        <div class="slider-text-inner text-center">
                            <h2>Welcome to the Pokhara</h2>
                            <h1>Hotel Lekhnath View Tower</h1>
                            <p>
                                <a class="btn btn-primary btn-demo" href="{{route('about')}}"></i> View Detail</a>
                                <a class="btn btn-primary btn-learn">Know More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url({{asset('theme/images/slider4.jpg')}});">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                        <div class="slider-text-inner text-center">
                            <h2>Discover &amp; Enjoy</h2>
                            <h1>Everything you need</h1>
                                <p><a class="btn btn-primary btn-demo" href="{{route('amnities')}}"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url({{asset('theme/images/slider3.jpg')}});">
            <div class="overlay"></div>
            <div class="container-fluids">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                        <div class="slider-text-inner text-center">
                            <h2>You are invited</h2>
                            <h1>We know how to please you</h1>
                                <p><a class="btn btn-primary btn-demo" href="{{route('amnities')}}"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url({{asset('theme/images/slider2.jpg')}});">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                        <div class="slider-text-inner text-center">
                            <h2>Come &amp; enjoy the unforgetable nights</h2>
                            <h1>Make this journey comfortable for both</h1>
                                <p><a class="btn btn-primary btn-demo" href="{{route('rooms')}}"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
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
<div id="colorlib-services">
    <div class="container">
        <div class="row">
            <div class="col-md-2 animate-box text-center">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-reception"></i>
                    </span>
                    <h3>24/7 Front Desk</h3>
                </div>
            </div>
            <div class="col-md-2 animate-box text-center">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-herbs"></i>
                    </span>
                    <h3>Peaceful Nature and Environment</h3>
                </div>
            </div>
            <div class="col-md-2 animate-box text-center">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-car"></i>
                    </span>
                    <h3>Parking Services</h3>
                </div>
            </div>
            <div class="col-md-2 animate-box text-center">
                <div class="services">
                    <span class="icon">
                        <i class="fa fa-fire"></i>
                    </span>
                    <h3>Picnic &amp; BBQ</h3>
                </div>
            </div>
            <div class="col-md-2 animate-box text-center">
                <div class="services">
                    <span class="icon">
                        <i class="fa fa-bath"></i>
                    </span>
                    <h3>Attached Room &amp; Hot Shower</h3>
                </div>
            </div>
            <div class="col-md-2 animate-box text-center">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-cheers"></i>
                    </span>
                    <h3>Restaurant &amp; Bar</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@if(count($rooms)>=1)
<div id="colorlib-rooms" class="colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                <h2>Rooms &amp; Suites</h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animate-box">
                <div class="owl-carousel owl-carousel2">
                    @foreach($rooms as $room)
                    <div class="item">
                        <a href="{{url($room->image_path)}}" class="room image-popup-link" style="background-image: url({{url($room->image_path)}});"></a>
                        <div class="desc text-center">
                            {{-- <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> --}}
                            <h3><a href="rooms-suites.html">Suite</a></h3>
                            <p class="price">
                                <span class="currency">NPR</span>
                                <span class="price-room">{{$room->price}}</span>
                                <span class="per">/ per night</span>
                            </p>
                            <ul>
                                {!!$room->facility!!}
                                {{-- <li><i class="icon-check"></i> Only 10 rooms are available</li>
                                <li><i class="icon-check"></i> Breakfast included</li>
                                <li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li> --}}
                            </ul>
                            <!-- <p><a class="btn btn-primary btn-book">Book now!</a></p> -->
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 text-center animate-box">
                <a href="{{route('rooms')}}">View all rooms <i class="icon-arrow-right3"></i></a>
            </div>
        </div>
    </div>
</div>
@endif


<div id="colorlib-dining-bar">
    <div class="container">
        <div class="row">
        </div>
        <div class="row">
            <div class="diningbar-flex">
                <div class="half animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                        <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                        <h2>About Us</h2>
                    </div>
                    <div class="clearfix"></div>
                <div class="tab-content">
                    <div style="color:#333333">
                        <p>The Hotel <b>Lekhnath View Tower</b> is the right choice for visitors who are searching for a combination of charm, peace and quiet, and a convenient position from which to explore Lake Side. It is a small, comfortable hotel, situated on the pachbhaiya, pokhara -31;. The Derai family and their staff offer an attentive, personalized service and are always available to offer any help to guests.
                        The hotel is arranged on two floors, without a lift. On the ground floor, apart from the reception, there is a comfortable lounge where you can sit and drink tea, or just read. There is also a splendid terrace, where, you can relax and immerge yourself from morning onwards in the atmosphere of Pokhara daily life
                        The rooms are arranged on the first and second. On the top floor, there is also a delightful terrace or solarium available for the use of guests, from where you can enjoy the wonderful view.
                        The breakfast is served in the lounge on the ground floor, and also outside during the summer months.</p>
                    </div>
                </div>
             </div>
             <div class="half diningbar-img" style="background-image: url({{asset('theme/images/home.png')}});"></div>
          </div>
       </div>
  </div>
</div>

<div id="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                <h2>Normal Food</h2>
                <p>High quality and deliciuos food with cheap rate.</p>
            </div>
        </div>
        <div class="blog-flex">
            <div class="video colorlib-video" style="background-image: url({{asset('theme/images/slider3.jpg')}});">
            </div>
            <div class="blog-entry">
                <div class="row">
                    <div class="col-md-6 animate-box">
                            <span class="img" style="background-image: url({{asset('theme/images/breakfast.jpg')}});"></span>
                            <div class="desc">
                                <h3>Break Fast</h3>
                                <span class="cat"> Rs 100</span>
                            </div>
                    </div>
                    <div class="col-md-6 animate-box">
                            <span class="img" style="background-image: url({{asset('theme/images/blog-2.jpg')}});"></span>
                            <div class="desc">
                                <h3>Fish</h3>
                                <span class="cat">Rs 200</span>
                            </div>
                    </div>
                    <div class="col-md-6 animate-box">
                            <span class="img" style="background-image: url({{asset('theme/images/blog-2.jpg')}});"></span>
                            <div class="desc">
                                <h3>Vegeterain</h3>
                                <span class="cat">Rs 150</span>
                            </div>
                    </div>
                    <div class="col-md-6 animate-box">
                            <span class="img" style="background-image: url({{asset('theme/images/non-veg.jpg')}});"></span>
                            <div class="desc">
                                <h3>Non-Vegeterain</h3>
                                <span class="cat">Rs 300</span>
                            </div>
                    </div>
                    <div class="col-md-6 animate-box">
                            <span class="img" style="background-image: url({{asset('theme/images/blog-2.jpg')}});"></span>
                            <div class="desc">
                                <h3>Fish</h3>
                                <span class="cat">Rs 200</span>
                            </div>
                    </div>
                    <div class="col-md-6 animate-box">
                            <span class="img" style="background-image: url({{asset('theme/images/breakfast.jpg')}});"></span>
                            <div class="desc">
                                <h3>Break Fast</h3>
                                <span class="cat"> Rs 100</span>
                            </div>
                    </div>
                    <div class="col-md-6 animate-box">
                            <span class="img" style="background-image: url({{asset('theme/images/blog-2.jpg')}});"></span>
                            <div class="desc">
                                <h3>Fish</h3>
                                <span class="cat">Rs 200</span>
                            </div>
                    </div>
                    <div class="col-md-6 animate-box">
                            <span class="img" style="background-image: url({{asset('theme/images/blog-2.jpg')}});"></span>
                            <div class="desc">
                                <h3>Fish</h3>
                                <span class="cat">Rs 200</span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="colorlib-subscribe" style="background-image: url({{asset('theme/images/slider5.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6">
                <h3 style="color:white;">Are you prepared for your trip? If not then, Let us guide you.</h3 style="color:white;">
            </div>
            <div class="col-md-6">
                <a href="{{route('blog')}}" class="btn btn-sm btn-primary">Explore With Us</a>
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
                <span class="user">Jinesh Subedi</span>
                <small>Satisfied Customer</small>
                <blockquote>
                    <p></i> I could easily escape to a hotel for a weekend and do absolutely nothing.</p>
                </blockquote>
            </div>
        </div>
        <div class="col-md-4 animate-box">
            <div class="testimony text-center">
                <span class="img-user" style="background-image: url({{('theme/images/person1.jpg')}});"></span>
                <span class="user">Sishira Basnet</span>
                <small>Satisfied Customer</small>
                <blockquote>
                    <p></i> Going out for rides with my friends and having lunch or dinner at a roadside hotel - that's my favourite time-pass.</p>
                </blockquote>
            </div>
        </div>
        <div class="col-md-4 animate-box">
            <div class="testimony text-center">
                <span class="img-user" style="background-image: url({{('theme/images/person3.jpg')}});"></span>
                <span class="user">Pukar Wagle</span>
                <small>Satisfied Customer</small>
                <blockquote>
                    <p></i> I just want to stay in my hotel room, read my book. I enjoy that private time.</p>
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
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#ajaxSubmit").click(function(e){
        e.preventDefault();
        var name = $('input[name=name]').val();
        var email = $('input[name=email]').val();
        var phone = $('input[name=phone]').val();
        var type = $('input[name=type]').val();
        var room_id = $('input[name=room_id]').val();
        var check_in = $('input[name=check_in]').val();
        var check_out = $('input[name=check_out]').val();
        var token = $('input[name="_token"]').val();
        console.log(name);
        $.ajax({
           type:'POST',
           url:'/',
           data:{name:name, email:email, phone:phone, type:type, room_id:room_id, check_in:check_in, check_out:check_out, token:token
           },
        request.done(function( msg ) {
            var response = JSON.parse(msg);
            console.log(response.msg);
        });

        request.fail(function( jqXHR, textStatus ) {
            console.log( "Request failed: " + textStatus );
        });
    });
</script>     
@endsection