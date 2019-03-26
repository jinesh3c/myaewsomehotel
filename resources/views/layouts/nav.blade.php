<style>
    li #admin{
        background-color:red;
    }
</style>
<nav class="colorlib-nav" role="navigation">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-4">
                            <p class="site">www.hotellekhnathviewtower.com.np</p>
                        </div>
                        <div class="col-xs-8 text-right">
                            <p class="num">Call: +9842089687</p>
                            <ul class="colorlib-social">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                            
                            <div id="colorlib-logo"><a href="{{route('index')}}">
                                <img src="{{asset('theme/images/logo.png')}}" width="100px">
                            </a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul><?php $segment = Request::segment(2); ?>
                                <li class="@if($segment=='')
                                        {{'active'}}
                                        @endif"><a href="{{route('index')}}">Home</a></li>
                                <li class="@if($segment=='rooms')
                                        {{'active'}}
                                        @endif"><a href="{{route('rooms')}}">Rooms</a></li>
                                <li class="@if($segment=='amnities')
                                        {{'active'}}
                                        @endif"><a href="{{route('amnities')}}">Amnities</a></li>
                                <li class="@if($segment=='about')
                                        {{'active'}}
                                        @endif"><a href="{{route('about')}}">About</a></li>
                                <li class="@if($segment=='contact')
                                        {{'active'}}
                                        @endif"><a href="{{route('contact')}}">Contact</a></li>
                                @if(Auth::user())
                                <li id="admin" class="@if($segment=='home')
                                        {{'active'}}
                                        @endif"><a href="{{route('home')}}">Dashboard</a></li>
                                <li id="admin" class="@if($segment=='room')
                                        {{'active'}}
                                        @endif"><a href="{{route('room.index')}}">Rooms</a></li>
                                <li id="admin" class="@if($segment=='booking')
                                        {{'active'}}
                                        @endif"><a href="{{route('booking.index')}}">Bookings</a></li>
                                <li id="admin" class="@if($segment=='message')
                                        {{'active'}}
                                        @endif"><a href="{{route('message.index')}}">Message</a></li>
                                <li id="admin"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    Logout
                                </a></li>    
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        