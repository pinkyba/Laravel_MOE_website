@extends('frontend_master')

@section('content')
	<!-- Carousel -->
	<div class="carousel slide" data-ride="carousel" id="Carousel">
		<div class="carousel-inner" >
			<div class="carousel-item active">
				<img src="{{asset('frontend_assets/images/contact1.jpg')}}" class="img-fluid w-100" style="opacity: 0.8;">					
			</div>				
			
			<h1 class="courseCrousel_title text-center">Let's Join</h1>
			<p class="courseCrousel text-center">Warmly welcome from MOE</p>
		</div>
		
	</div>
	<!-- end carousel -->

	<!-- Our Service -->
	<br>
	<div class="container my-5">
		<div class="row">
			<div class="col-sm-6 col-lg-3 text-center">
				<img src="{{asset('frontend_assets/images/y4.jpg')}}" class="img-fluid p-2 service_img">
			</div>
			<div class="col-sm-6 col-lg-3 text-center">
				<img src="{{asset('frontend_assets/images/y1.jpg')}}" class="img-fluid p-2 service_img">
			</div>
			<div class="col-sm-6 col-lg-3 text-center">
				<img src="{{asset('frontend_assets/images/y2.jpg')}}" class="img-fluid p-2 service_img">
			</div>
			<div class="col-sm-6 col-lg-3 text-center">
				<img src="{{asset('frontend_assets/images/y4.jpg')}}" class="img-fluid p-2 service_img">
			</div>
		</div>
	</div>
	<!-- end our service -->

	<div class="container my-5">
		<p class="about_text" data-aos="fade-up">၆လအတွင်း ရောင်းအား (၂)ဆ </p>
		<hr class="hr_size">
		<p class="my-5">
			MOE ကို အွန်လိုင်း လုပ်ငန်းရှင်များအား ၆ လအတွင်း ရောင်းအား ၂ဆ ရအောင် ကူညီပေးရန် ရည်ရွယ်ချက်ဖြင့် ၂၀၁၆ ဒီဇင်ဘာတွင် စတင်တည်ထောင်ခဲ့ပါသည်။<br><br>
			လက်ရှိအချိန်ထိ လုပ်ငန်းအမျိုးအစားပေါင်း ၂၀၀ ကျော်မှ လုပ်ငန်းရှင်ပေါင်း ၁၂၀၀၀ ကျော်ကို သင်တန်းများ ပို့ချခဲ့ပြီးဖြစ်ပါသည်။ လက်တွေ့လိုက်နာပြီး ရောင်းအားတက်ခဲ့သူ လုပ်ငန်းရှင်များ၏ 5 Stars Review အစစ်အမှန် ၂၀၀၀ ကျော် ရရှိခဲ့ပါသည်။ <br><br>MOE တွင် လက်ရှိသင်တန်း အမျိုးအစား ၁၀ မျိုး အပြင်၊ အခြား ဝန်ဆောင်မှုများ အနေဖြင့် Facebook Page စီမံပေးခြင်း၊ Advisor Services များ၊ Consultation Service များ၊ Page Analysis Service များ၊ Digital Business Package Service များ ရယူနေသော လုပ်ငန်းပေါင်း ၅၀၀ ကျော်အပြင်၊ Facebook ပေါ်တွင် ကြော်ငြာသူတိုင်းရဲ့ လက်စွဲစာအုပ်များ ဖြစ်သည့် “Facebook ကြော်ငြာ ချိန်နည်း ၁၀၀” နှင့် “Facebook ကြော်ငြာ အိုင်ဒီယာ ၁၀၀” တို့ကို အုပ်ရေ ၁၁,၀၀၀ ကျော် ရောင်းချပေးခဲ့ပြီး ဖြစ်ပါသည်။
		</p>
	</div>

	<!-- Our page rating -->
	<div class="container-fluid bg_img my-5 h-auto" data-aos="fade-up">
		<div class="row py-5">
			<div class="col-12 col-md-12 text-light text-center">
				<h3 class="text-center shadow-lg">We are trying to improve customers’ business and<br><br>
				 live style with our technologies.</h3>
			</div>
		</div>
	</div>

	<!-- trainer -->
	<br>
	<div class="container-fluid my-5">
		<h1 class="text-center trainer_title mt-5" data-aos="fade-up">Meet Our Staff</h1>
		<hr class="hr_size mb-5"><br>
		<div class="row">				
			<div class="col-sm-6 col-xl-3 text-center mb-4">
				<img src="{{asset('frontend_assets/images/owner.gif')}}" style="width: 280px; height: 380px;" data-aos="fade-up">
				<p class="mt-3" style="color: gray;">Founder</p>
				<h3 class="mb-4">Iwasaki Ichiro</h3>					
		        	<a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook-f fa-2x pl-2 pr-3 pt-2 pb-1 mx-2 trainer_social"></i></a>
		        	<a href="https://www.twitter.com" target="blank"><i class="fa fa-twitter fa-2x pl-2 pr-2 pt-2 pb-1 mx-2 trainer_social"></i></a>
		        	<a href="https://www.instagram.com" target="blank"><i class="fa fa-instagram fa-2x pl-2 pr-2 pt-2 pb-1 mx-2 trainer_social"></i></a>
			</div>
			<div class="col-sm-6 col-xl-3 text-center mb-4" data-aos="fade-up">
				<img src="{{asset('frontend_assets/images/trainer-1.gif')}}" style="width: 280px; height: 380px;" data-aos="fade-up">
				<p class="mt-3" style="color: gray;">Co Founder</p>
				<h3 class="mb-4">Kim Hye Jun</h3>					
		        	<a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook-f fa-2x pl-2 pr-3 pt-2 pb-1 mx-2 trainer_social"></i></a>
		        	<a href="https://www.twitter.com" target="blank"><i class="fa fa-twitter fa-2x pl-2 pr-2 pt-2 pb-1 mx-2 trainer_social"></i></a>
		        	<a href="https://www.instagram.com" target="blank"><i class="fa fa-instagram fa-2x pl-2 pr-2 pt-2 pb-1 mx-2 trainer_social"></i></a>
			</div>
			<div class="col-sm-6 col-xl-3 text-center mb-4" data-aos="fade-up">
				<img src="{{asset('frontend_assets/images/trainer-3.gif')}}" style="width: 280px; height: 380px;" data-aos="fade-up">
				<p class="mt-3" style="color: gray;">Project Manager</p>
				<h3 class="mb-4">Htoo Aung</h3>					
		        	<a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook-f fa-2x pl-2 pr-3 pt-2 pb-1 mx-2 trainer_social"></i></a>
		        	<a href="https://www.twitter.com" target="blank"><i class="fa fa-twitter fa-2x pl-2 pr-2 pt-2 pb-1 mx-2 trainer_social"></i></a>
		        	<a href="https://www.instagram.com" target="blank"><i class="fa fa-instagram fa-2x pl-2 pr-2 pt-2 pb-1 mx-2 trainer_social"></i></a>
			</div>
			<div class="col-sm-6 col-xl-3 text-center mb-4" data-aos="fade-up">
				<img src="{{asset('frontend_assets/images/trainer-2.jpg')}}" style="width: 280px; height: 380px;" data-aos="fade-up">
				<p class="mt-3" style="color: gray;">Marketing Leader</p>
				<h3 class="mb-4">Watanabe Aki</h3>					
		        	<a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook-f fa-2x pl-2 pr-3 pt-2 pb-1 mx-2 trainer_social"></i></a>
		        	<a href="https://www.twitter.com" target="blank"><i class="fa fa-twitter fa-2x pl-2 pr-2 pt-2 pb-1 mx-2 trainer_social"></i></a>
		        	<a href="https://www.instagram.com" target="blank"><i class="fa fa-instagram fa-2x pl-2 pr-2 pt-2 pb-1 mx-2 trainer_social"></i></a>
			</div>
		</div>
	</div>
	<!-- end trainer -->


	<!-- footer section -->
	<div class="container-fluid bg-light mt-5 mb-3 pt-5">
        <div class="row ml-5">
        	<div class="col-lg-5 col-md-6 col-sm-6" data-aos="fade-up">
        		<div class="footer_wel">
        			<img src="{{asset('frontend_assets/images/logo.png')}}" class="img-fluid footer_wel_img">
        			<h1 id="footer_wel_text">Myanmar Online Entrepreneur</h1>
        			<p class="clock ml-2 mt-5">
        				<i class="far fa-clock mr-2"></i>
        				Mon - Fri: 6:30 am - 7:00 pm
        			</p>
        			<p class="clock ml-2">
        				<i class="far fa-clock mr-2"></i>
        				Sat - Sun: 8:30 am - 6:00 pm
        			</p>

        			<form action="#" class="my-5">
						<div class="input-group mb-3">
						  <input type="email" class="form-control" placeholder="Your Email" name="email">
						  <div class="input-group-append">
						    <button class="btn btn-info" type="button">Send</button>
						  </div>
						</div>
        			</form>
        		</div>
        	</div>
        	
        	<div class="col-lg-3 col-md-3 col-sm-6" data-aos="fade-up">
        		<h3 class="mb-4 ml-5">About Us</h3>
        		<p><a href="#" class="footer_a ml-5">Our Vision</a></p>
        		<p><a href="#" class="footer_a ml-5">Our Mission</a></p>
        		<p><a href="#" class="footer_a ml-5">Our Service</a></p>
        		<p><a href="#" class="footer_a ml-5">Our Experiences</a></p>
        		<p><a href="#" class="footer_a ml-5">Successful Stories</a></p>	        		
        	</div>
        	<div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
        		<h3 class="mb-4">Contact Info</h3>
				<p class="clock ml-2 mt-4">
				<i class="fa fa-phone mr-2"></i>
        			0152092
        		</p>
        		<p class="clock ml-2">
        			<i class="fa fa-envelope mr-2"></i>
        			admin@gmail.com
        		</p>
        		<p class="clock ml-2">
        			<i class="fa fa-location-arrow mr-2"></i>
        			Room No. 8-A , MTP Condo, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Insein Rd, Yangon, Myanmar
        		</p>	        			        		
        	</div>
        </div>
        <hr id="footer_hr">
        <div class="row">
        	<div class="col-lg-6 col-md-6 col-sm-6 mt-1">
        		Copyright © 2020 | Htet Htet
        	</div>
        	<div class="col-lg-2 offset-lg-4 col-md-6 col-sm-6">
        		<div class="footer_social">
	        		<a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook-f"></i></a>
	        		<a href="https://www.twitter.com" target="blank"><i class="fa fa-twitter"></i></a>
	        		<a href="https://www.instagram.com" target="blank"><i class="fa fa-instagram"></i></a>
        		</div>
        	</div>	        	
        </div>
	</div>
	<!-- end footer section -->
@endsection