@extends('layouts.app')
@section('content')
<aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
	   	<li style="background-image: url({{asset('theme/images/banner.jpg')}});">
	   		<div class="overlay"></div>
	   		<div class="container-fluid">
	   			<div class="row">
		   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
		   				<div class="slider-text-inner slider-text-inner2 text-center">
		   					<h2>Things to do in Pokhara</h2>
		   					<h1>Blog</h1>
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
			<div class="amenities-flex">
				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/sarankot.jpg')}});">
				</div>
				<div class="desc animate-box">
					<h2><a href="#">Sarankot</a></h2>
					{{-- <p class="price">
					</p> --}}
					<p>
						The view of the Annapurna Himalaya from Sarangkot (foreigner/Nepali Rs 50/20) is almost a religious experience. From here, you can see a panoramic sweep of Himalayan peaks, from Dhaulagiri (8167m) in the west to the perfect pyramid of Machhapuchhare (6997m), the tent-like peak of Annapurna II (7937m) to Lamjung (6983m) in the east. Most people come here at dawn or dusk, when the sun picks out the peaks, transforming them from a purple-pink to a celestial gold. 
					</p>
				</div>
				<div class="desc animate-box">
					<h2><a href="#">Barahi Temple</a></h2>
					{{-- <p class="price">
						<span class="currency">$</span>
						<span class="price-room">2</span>
						<span class="per">/ per plate</span>
					</p> --}}
					<p>
						Tal Barahi Temple, also known as Lake Temple or Barahi Temple is a two-story pagoda temple located in the Kaski District of the Gandaki Zone in western Nepal. It is a hindu temple of the Goddess Durga, the protector of gods. It is located in a small island on the south east section of Phewa Lake in Pokhara.
					</p>
				</div>
				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/barahi.jpg')}});">
				</div>

				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/museum.jpg')}});">
				</div>
				<div class="desc animate-box">
					<h2><a href="#">International Mountain Museum</a></h2>
					<p class="price">
						<span class="per"><b>How to get there:</b> Local cabs are cheap and the best way to reach.</span>
						<span class="per"><b>Timings:</b> 9 AM to 5 PM all days.</span>
						<span class="per"><b>Entry fees (in Nepalese Rupee):</b> Nepalese: Rs. 80.00; Students: Rs. 40.00; SAARC Countries’ Visitors: Rs. 200.00; Foreigners: Rs. 400.00; Garden: Rs. 20.00.</span>
					</p>
					<p>
						This expansive museum is devoted to the mountains of Nepal, the mountaineers who climbed them and the people who call them home. Inside, you can see original gear from many of the first Himalayan ascents, as well as displays on the history, culture, geology, and flora and fauna of the Himalaya. 
					</p>
				</div>
				<div class="desc animate-box">
					<h2><a href="#">Gupteshwar Mandir</a></h2>
					<p>
						This cave temple is more popular among the religious locals of Nepal. Even on a weekday afternoon, the crowd was strong in the caves. The inside of the cave has a lovely formation of stalagmites that give way to stream and a faint waterfall which you can see up close by getting down the stairs.
						The modern looking sanctum was recently renovated, passing through which you go underground to reach the ancient caves. The temple of Gupteshwar or Lord Shiva can be seen at the centre once you navigate through the narrow caves.
						The cave is in the city area and is easy to locate! You can probably do this on a hot afternoon to escape the sun before heading to the lake or the pagoda for views. The entry fee is NR 100 for foreigners.
					</p>
				</div>
				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/gupteshwar.jpg')}});">
				</div>

				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/devisfall.jpg')}});">
				</div>
				<div class="desc animate-box">
					<h2><a href="#">Davis Waterfalls</a></h2>
					<p>
						Davis Waterfalls is also not far from the centre. This place is actually a gorge with waterfalls which leads to a tunnel underground that leads to cave formations of Gupteshwar Mahadev. The water comes from the Phewa dam,  The legend of this place is sad – A Swiss couple went swimming here, and the lady Davis passed away in the tunnel due to the sudden water overflow. It is a popular place to hang out with the locals with some additional activities for fun in place.
					</p>
				</div>
				<div class="desc animate-box">
					<h2><a href="#">Annapurna Base Camp Trek</a></h2>
					<p>
						Annapurna Base Camp Trek is the second most extreme trek in Nepal, the other being the Everest. This magnificent trail passes through the mountains of Dhaulagiri, Machhapuchhre, Manaslu, Gangapurna and Tilicho Peak, finally culminating at the Annapurna peaks 1 to 8. The speciality of this trek is the different trails that it has – that decides the difficulty level as well as the duration of the trek. Also, this trek is comfortable because you get to stay in tea houses after tiring trek.
					</p>
				</div>
				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/annapurna.jpg')}});">
				</div>

				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/paragliding.jpg')}});">
				</div>
				<div class="desc animate-box">
					<h2><a href="#">Paragliding</a></h2>
					<p>
						Paragliding in one of the most famous things to do in Pokhara, Nepal. Paragliding is perhaps the most rewarding of short duration adventure sports given the fact that there’s nothing between you and the scenery unfolding before you. In the distance lie, the majestic Himalayas and down below are the villages, monasteries, temples, lakes and jungles, a true bird’s eye view and a fascinating one at that. It can stay aloft for many hours and travel a great distance. The main area for paragliding flying in Nepal is the Annapurna region, more specifically the Pokhara city of Nepal. Pokhara city is called the lakeside town, Nepal’s second most tourists city which is nestled at the foot of the Annapurna Himal. One can view commanded from here Pokhara or say from the paragliding in Pokhara 3 of the worlds 8000 m peaks.
					</p>
				</div>
				<div class="desc animate-box">
					<h2><a href="#">Zip flyer</a></h2>
					<p>
						Zip flyer is one of alluring experience exercises offered by the Adventurer’s Mecca, Pokhara. The Zip-flyer begins from the 1625 meters in Sarangkot and finishes at 960mtrs in Hemmja plain. The Zip Flyer cases to be the most outrageous zip flyer with the aggregate separation of 1.80 km (1.12 mi), a vertical stature of 610 m (2000 ft.) and the greatest speed of 120 km/hr (75 mph). The zip line is the world’s steepest, tallest and the quickest of its sort on the planet.
					</p>
				</div>
				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/zip.jpg')}});">
				</div>

				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/pagoda.jpg')}});">
				</div>
				<div class="desc animate-box">
					<h2><a href="#">Peace Pagoda</a></h2>
					<p>
						The World Peace Pagoda is a popular destination southwest of Pokhara, situated at an altitude of almost 1000 meters. Visitors can enjoy views of the Himalayan peaks, as well as Phewa Lake and Sarangkot Mountain. To reach the World Peace Pagoda, you can take a taxi from Pokhara, but you still have to walk a bit to reach the pagoda and its main viewpoint. Alternatively, you can rent a bike or a motorbike and brave the steep and rocky roads. Or you can do a panoramic hiking loop as I did: hike for two hours from Pokhara Damside, along a trail through the forest, and go down to Phewa Lake along the Stupa Walkway.
						From Lakeside, all local buses go to Damside Road. When the bus I was on passed the famous German Bakery, a good landmark, I knew it was time to get off and start walking. It was easy to spot the brilliant white pagoda uphill and head towards it.
					</p>
				</div>
				<div class="desc animate-box">
					<h2><a href="#">Boating in Phewa Lake</a></h2>
					<p>
						Boating in Nepal is one of the interesting recreational things. It has glacier fed lakes up north to the gently moving rivers in terai, you hire a boat for couple of hours with guide or without guide, you can enjoy the moments with lots of sights near around you.
						Phewa Lake is the second largest lake in Pokhara, the lake bordering the forested hill. The view of Fishtail and other mountains reflected in the lake, the little island and the Tal Barahi temple in the middle, the white stupa on the top of the hill, the gliders jumping from Sarangkot, the Ultralight soaring up high and paralleled each other, buzzing, all at once can be seized in the mild breeze over the Phewa Lake.
					</p>
				</div>
				<div class="amenities-img animate-box" style="background-image: url({{asset('theme/images/boating.jpg')}});">
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