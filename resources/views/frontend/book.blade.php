@extends('frontend_master')

@section('content')
	<!-- Carousel -->
	<div class="carousel slide" data-ride="carousel" id="Carousel">
		<div class="carousel-inner" >
			<div class="carousel-item active">
				<img src="{{asset('frontend_assets/images/book1.jpg')}}" class="img-fluid w-100" style="opacity: 0.8;">					
			</div>				
			
			<h1 class="courseCrousel_title text-center text-capitalize">Upcoming Book</h1>
			<p class="courseCrousel text-center">Warmly welcome from Myanmar Online Entrepreneur.</p>
		</div>
		
	</div>
	<!-- end carousel -->


	<!-- book -->
	<div class="container my-5">
		<h3 class="text-center mt-5" style="color: #00CED1; font-size: 55px;">All Books</h3>
		<hr class="hr_size mb-5">
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
	</div>
	<!-- end schedule -->

	<br>
	
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