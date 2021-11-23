@extends('frontend_master')

@section('content')
	<!-- Carousel -->
	<div class="carousel slide" data-ride="carousel" id="Carousel">
		<div class="carousel-inner" >
			<div class="carousel-item active">
				<img src="{{asset('frontend_assets/images/ccc.jpg')}}" class="img-fluid w-100" style="opacity: 0.8;">					
			</div>				
			
			<h1 class="courseCrousel_title text-center">MOE COURSES</h1>
			<p class="courseCrousel text-center">You can learn every where and every time</p>
		</div>
		
	</div>
	<!-- end carousel -->
	
	<br>
	<!-- Classes -->
	<div class="container mt-5">
		<div class="row ml-2">
			@foreach($courses as $course)
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
					    <a href="{{route('courseDetailPage', $course->id)}}" class="btn btn-outline-info">Learn More</a>
				    </div>
				</div>				
			</div>
			@endforeach	
			
		</div>
	</div>
	<!-- end class -->
	

	<!-- Pagination div -->
	<nav aria-label="Page navigation example mt-5">
	
	  <ul class="pagination justify-content-center">
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	        <span class="sr-only">Previous</span>
	      </a>
	    </li>
	    <li class="page-item"><a class="page-link" href="#">1</a></li>
	    <li class="page-item"><a class="page-link" href="#">2</a></li>
	    <li class="page-item"><a class="page-link" href="#">3</a></li>
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	        <span class="sr-only">Next</span>
	      </a>
	    </li>
	  </ul>
	  
	</nav>
	<!-- end pagination -->


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