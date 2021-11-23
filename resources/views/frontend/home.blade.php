@extends('frontend_master')

@section('content')

	<!-- Carousel -->
	<div class="carousel slide" data-ride="carousel" data-aos="fade-up" id="Carousel">
		<div class="carousel-inner" >
			<div class="carousel-item active">
				<img src="{{asset('frontend_assets/images/cc1.jpg')}}" class="img-fluid w-100" style="opacity: 0.6px;">					
			</div>				
			<div class="carousel-item">
				<img src="{{asset('frontend_assets/images/c1.jpg')}}" class="img-fluid w-100">					
			</div>
			<div class="carousel-item">
				<img src="{{asset('frontend_assets/images/cpp.jpg')}}" class="img-fluid w-100">						
			</div>
			<h1 class="typewrite_title d-none d-lg-block">MOE</h1>
			<h2 href="" class="typewrite type_writer d-none d-lg-block" data-period="2000" data-type='[ " ၆လအတွင်း ရောင်းအား (၂)ဆ တိုးတက်ချင်တဲ့ လုပ်ငန်းရှင်များကို ကူညီပေးနေတဲ့ နေရာလေးပါ။","သင်တန်းသားပေါင်း ၁၀,၀၀၀ ကျော်သင်ကြားပေးခဲ့ပြီး၊ သင်တန်းသက်တမ်း (၄)နှစ်ကျော်ခဲ့ပါပြီ။"]'></h2>
		</div>
		<a href="#Carousel" class="carousel-control-prev" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a href="#Carousel" class="carousel-control-next" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
	<!-- end carousel -->

	<!-- welcome to moe -->
	<div class="container-fluid mt-5">
		<div class="row">				
			<div class="col-12 col-lg-12 mx-auto">
				<p id="welcome_title" >Welcome to MOE</p>					
					<p class="yoga_list" data-aos="fade-up">၆လအတွင်း ရောင်းအား (၂)ဆ တိုးတက်ချင်တဲ့ လုပ်ငန်းရှင်များကို ကူညီပေးနေတဲ့ နေရာလေးပါ။</p>
					<p class="yoga_list" data-aos="fade-up">သင်တန်းသားပေါင်း ၁၀,၀၀၀ ကျော်သင်ကြားပေးခဲ့ပြီး၊ သင်တန်းသက်တမ်း (၄)နှစ်ကျော်ခဲ့ပါပြီ။</p>
					
				
				<p id="welcome" data-aos="fade-up">၆လ ၂ဆ</p>
			</div>
		</div>
		<div class="col-md-12 text-center mt-4">
			<a href="about.html" data-aos="fade-up" class="btn btn-dark px-3 py-1 btn-moe">MOE အကြောင်း</a>
		</div>
	</div>
	<!-- end welcome to moe -->
	<br>

	<div class="divBar">
		<p class="mt-5 ml-4 type_title">Our Latest Courses</p>
	</div>

	<!-- Classes -->
	<div class="container mt-5">
		<div class="row ml-2">
			@foreach($latest_courses as $course)
			<div class="col col-md-6 col-xl-4 mb-5" data-aos="fade-up">
				<div class="card card_container mx-auto" style="width: 20rem;">
					<div class="card_content img_size mx-4 mt-5" style="background-image: url({{asset('frontend_assets/images/moe.png)')}}; opacity: 0.7; height: 9rem; background-repeat: no-repeat;">							
					</div>
					@if($course->discount)
						<div class="type rounded-right">
							<span class="type_text">{{$course->discount}} Ks</span>
						</div>
					@else
						<div class="type rounded-right">
							<span class="type_text">{{$course->price}} Ks</span>
						</div>
					@endif
				    <div class="card-body card_content">					  	
					    <h5 class="card-title mb-3">{{$course->name}}</h5>
					    <p class="card-text mb-4">{{Str::limit($course->description, 30)}}</p>
					    <a href="{{route('courseDetailPage',$course->id)}}" class="btn btn-outline-info">Learn More</a>
				    </div>
				</div>				
			</div>
			@endforeach			

			<div class="col-md-12 text-center mt-3">
				<a href="{{route('coursePage')}}" data-aos="fade-up" class="btn btn-dark px-3 py-1 btn-moe">More Courses</a>
			</div>
		</div>
	</div>
	<!-- end class -->

	<!-- class sns  -->
	<div class="container-fluid bg_img my-5">
		<div class="row">				
			<div class="col-12 col-lg-12 mx-auto">
				<h3 class="text-center mt-5 mb-5 text-light">Class SNS – Study Note Session</h3>			
					<p class="yoga_list1 text-light">ဒီချိန်မှာ အိမ်မှာ ဒီတိုင်းမနေပဲကိုယ့်ရဲ့ သိပြီးသားအသိတွေ ထပ်တိုးအောင်ပညာရည်ပိုပြည့်ဝအောင်လေ့လာထားချင်တယ် ဆိုရင်စီးပွားရေးနဲ့ သက်ဆိုင်တဲ့ တပတ်လေ့လာထားသမျှနည်းသစ်၊ </p>
					<p class="yoga_list1 text-light">ဗဟုသုတအသစ်၊အတွေးအခေါ်အသစ်တွေကိုသင်ပေးနေတဲ့ Study Note Sessionလေးရှိပါတယ်</p>					
			</div>
		</div>
		<div class="col-md-12 text-center mt-4">
			<a href="about.html" class="btn btn-dark mb-5 px-3 py-1 btn-moe"><b>MOE အကြောင်း</b></a>
		</div>
	</div>

	<!-- why choose us -->
	<div class="container my-2">
		<div class="row">
			<div class="col-12 col-xl-12 mx-auto" data-aos="fade-up">
				<h1 class="choose_title mt-5 mb-4">
					Why Choose Us?
				</h1>
				<p class="mb-4">
					2020 ဟာ မြန်မာပြည်အတွက် Video ခေတ်ဖြစ်လာပါပြီ။ Video မတင်တဲ့ Page တွေအကုန် Organic Reach တွေ သိသိသာသာကျလာပါတယ်။ Live ၃ နာရီစာလွှင့်ပြီး ၃လစာ အထည်တွေရောင်းနေရတဲ့ Page တွေ ပေါ်လာပါပြီ ။ သူများလို ငါက လူရှေ့မထွက်ရဲဘူး ပြောနေယုံနဲ့ မရောင်းရတာ အရမ်းကို သိသာလာနေပါပြီ။
				</p>
				<div class="review_div text-center">
					<div class="review_img">
						<img src="{{asset('frontend_assets/images/r4.gif')}}" class="img-fluid">
					</div>	

					<div class="review_text">
						<p class="review text-center count1" data-from="0" data-to="1286" data-time="4000"></p>
						<p class="review1 text-center">Happy Customers</p>
					</div>
				</div>
				<div class="review_div">
					<div class="review_img">
						<img src="{{asset('frontend_assets/images/r2.gif')}}" class="img-fluid">
					</div>			
					<div class="review_text">
						<p class="review text-center count2" data-from="0" data-to="100" data-time="4000">0</p>
						<p class="review1 text-center">Satisfaction</p>
					</div>
				</div>
					
				<div class="review_div">
					<div class="review_img">
						<img src="{{asset('frontend_assets/images/r4.gif')}}" class="img-fluid">
					</div>			
					<div class="review_text">
						<p class="review text-center count4" data-from="0" data-to="10" data-time="4000">10</p>
						<p class="review1 text-center">Year of experience</p>
					</div>
				</div>					
			</div>				
		</div>
	</div>

	<!-- Books -->
	<div class="divBar">
		<p class="ml-4 type_title">Our Latest Books</p>
	</div>
	<div class="container mt-5">
		<div class="card" style="width: 70rem;" data-aos="fade-up">
		  	<div class="row">
		  		<div class="col-lg-4">
		  			<img src="{{asset('frontend_assets/images/blue.jpg')}}" width="300" height="280" class="img-fluid m-3">
		  		</div>
		  		<div class="col-lg-8">
		  			<div class="card-body my-2">
		  				<h3 class="mb-3">100 Target book</h3>
				    	<p class="card-text">အခြေခံ Page ထောင်နည်းမပါပါ။ Audience ချိန်နည်း သီးသန့်ပဲ ပါပါမယ်။ Audience ရွေးနည်း</p>
				    	<p>5,000 Ks</p>					    	
						<a href="about.html" class="btn btn-dark px-3 py-1 btn-moe">Learn More</a>							
				  	</div>
		  		</div>
		  	</div>		  	
		</div>
	</div>
	<div class="container mt-5">
		<div class="card" style="width: 70rem;" data-aos="fade-up">
		  	<div class="row">
		  		<div class="col-lg-4">
		  			<img src="{{asset('frontend_assets/images/blue.jpg')}}" width="300" height="280" class="img-fluid m-3">
		  		</div>
		  		<div class="col-lg-8">
		  			<div class="card-body my-2">
		  				<h3 class="mb-3">100 Target book</h3>
				    	<p class="card-text">အခြေခံ Page ထောင်နည်းမပါပါ။ Audience ချိန်နည်း သီးသန့်ပဲ ပါပါမယ်။ Audience ရွေးနည်း</p>
				    	<p>5,000 Ks</p>					    	
						<a href="about.html" class="btn btn-dark px-3 py-1 btn-moe">Learn More</a>							
				  	</div>
		  		</div>
		  	</div>		  	
		</div>
		<div class="col-md-12 text-center mt-5">
			<a href="about.html" class="btn btn-dark px-3 py-1 btn-moe">More Courses</a>
			<br><br><br><br>
		</div>
	</div>
	<!-- end book -->

	<!-- Our team -->
	<div class="container-fluid bg-light">
		<br>
		<h1 class="text-center class_title mb-4" data-aos="fade-up">Meet Our Team</h1>
		<p class="text-center mb-5" style="color: gray;" data-aos="fade-up">Our insturctors are highly qualified and will be happy to share this
		spiritual journey with you.
		</p>
		<div class="row" data-aos="fade-up">
			<div class="col-sm-6 col-xl-3 text-center mb-4">											
				<div class="card-wrapper text-center mx-auto">				      
				      <div class="card_des profile-two">				        
				        <div class="card-image profile-img--two">
				          <img src="{{asset('frontend_assets/images/t1.gif')}}">
				        </div>
				        <div class="details jane">
				            <h3 class="name mt-2">Htoo Aung</h3>
				            <p class="job-title">Founder</p>				            
				        </div>
				    </div>
				 </div>					 						
			</div>
			<div class="col-sm-6 col-xl-3 text-center mb-4">											
				<div class="card-wrapper text-center mx-auto">			      
				      <div class="card_des profile-two">				        
				        <div class="card-image profile-img--two">
				          <img src="{{asset('frontend_assets/images/t2.gif')}}">
				        </div>
				        <div class="details jane">
				            <h3 class="name mt-2">Mary Smith</h3>
				            <p class="job-title">Project Manager</p>				            
				        </div>
				    </div>
				 </div>					 						
			</div>
			<div class="col-sm-6 col-xl-3 text-center mb-4">											
				<div class="card-wrapper text-center mx-auto">				      
				      <div class="card_des profile-two">				        
				        <div class="card-image profile-img--two">
				          <img src="{{asset('frontend_assets/images/t3.gif')}}">
				        </div>
				        <div class="details jane">
				            <h3 class="name mt-2">Tom Jordan</h3>
				            <p class="job-title">Digital Marketing Lead</p>				            
				        </div>
				    </div>
				 </div>					 						
			</div>
			<div class="col-sm-6 col-xl-3 text-center mb-5">											
				<div class="card-wrapper text-center mx-auto">				      
				      <div class="card_des profile-two">				        
				        <div class="card-image profile-img--two">
				          <img src="{{asset('frontend_assets/images/owner.gif')}}">
				        </div>
				        <div class="details jane">
				            <h3 class="name mt-2">Watanabe Aki</h3>
				            <p class="job-title">Software Engineer</p>            
				        </div>
				    </div>
				 </div>					 						
			</div>
		</div>
	</div>
	<!-- end our team -->


	<!-- footer section -->
	<div class="container-fluid mt-5 mb-3 pt-5">
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