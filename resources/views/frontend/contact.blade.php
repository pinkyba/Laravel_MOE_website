@extends('frontend_master')

@section('content')
	<div class="carousel slide" data-ride="carousel" id="Carousel">
		<div class="carousel-inner" >
			<div class="carousel-item active">
				<img src="{{asset('frontend_assets/images/xx.jpg')}}" class="img-fluid w-100" style="opacity: 0.8;">					
			</div>				
			
			<h1 class="courseCrousel_title text-center">Contact Us</h1>
			<p class="courseCrousel text-center">Let's Join Our Services</p>
		</div>
		
	</div>
	<!-- end carousel -->


	<br><br>
	<!-- Contact us -->
	<div class="container mt-3 mb-4">
		<div class="row">
			<div class="col-lg-4 bg-light contact_info">
				<h2 class="mt-4 font-weight-bold">Contact Information</h2>
				<p class="mt-4" style="font-size: 18px; font-weight: bold;">Visit Myanmar Online Entrepreneur</p>
				<p class="clock mt-3">
	        		<i class="fa fa-location-arrow mr-2" style="color: #00CED1;"></i>
	        		<span style="font-size: 17px;">Room No. 8-A , Insein Rd, Yangon, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myanmar</span>
	        	</p>
	        	<p class="mt-4" style="font-size: 18px; font-weight: bold;">Message Us</p>
				<p class="clock mt-3">
	        		<i class="fa fa-phone mr-2" style="color: #00CED1;"></i>
	        		<span style="font-size: 17px;">(01)52092</span>
	        	</p>
	        	<p class="clock mt-3">
	        		<i class="fa fa-envelope mr-2" style="color: #00CED1;"></i>
	        		<span style="font-size: 17px;">admin@gmail.com</span>
	        	</p>
	        	<p class="mt-4" style="font-size: 18px; font-weight: bold;">Opening Hours</p>
				<p class="clock mt-3">
	        		<i class="far fa-clock mr-2" style="color: #00CED1;"></i>
	        		<span style="font-size: 17px;">Mon - Fri: 6:30 am - 7:00 pm</span>
	        	</p>
	        	<p class="clock mt-3 mb-4">
	        		<i class="far fa-clock mr-2" style="color: #00CED1;"></i>
	        		<span style="font-size: 17px;">Mon - Fri: 6:30 am - 7:00 pm</span>
	        	</p>
			</div>
			<div class="col-lg-8 mt-2">
				<form action="#" class="contact_form ml-5">
	            	<div class="row">
	            		<div class="col-md-6">
			                <div class="form-group">
			                  <input type="text" class="form-control" placeholder="Your Name">
			                </div>
	                	</div>
	                	<div class="col-md-6">
		                	<div class="form-group">
		                  		<input type="text" class="form-control" placeholder="Your Email">
		                	</div>
		                </div>
	              	</div>
	              	<div class="form-group">
	                	<input type="text" class="form-control" id="subject" placeholder="Subject">
	              	</div>
	              	<div class="form-group">
	                	<textarea name="" id="textarea" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
	              	</div>
	              	<div class="form-group mt-5">
	                	<input type="submit" value="Send Message" class="btn btn-info py-2 px-2">
	              	</div>
            	</form>					
			</div>
		</div>
	</div>

	<!-- Google map -->
	<div class="container" data-aos="fade-up">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.606091736428!2d96.12316661393352!3d16.845886588405293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1953fc49fb755%3A0x45b19605a43c3143!2sMyanmar%20IT%20Consulting!5e0!3m2!1sen!2smm!4v1604907175963!5m2!1sen!2smm" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
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