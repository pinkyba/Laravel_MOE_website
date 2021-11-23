@extends('frontend_master')

@section('content')
	<!-- Carousel -->
	<div class="carousel slide" data-ride="carousel" id="Carousel">
		<div class="carousel-inner" >
			<div class="carousel-item active">
				<img src="{{asset('frontend_assets/images/ccc.jpg')}}" class="img-fluid w-100" style="opacity: 0.8;">					
			</div>				
			
			<h1 class="courseCrousel_title text-center">Course Detail</h1>
			<p class="courseCrousel text-center">You can learn every where and every time</p>
		</div>
		
	</div>
	<!-- end carousel -->
	
	<div class="divBar">
		<p class="ml-5"><span class="text-danger"><a href="{{route('homepage')}}">Home</a>/ <a href="{{route('coursePage')}}">Courses</a>/ </span>{{$course->category->name}}/ {{$course->name}}</p>
	</div>
	<!-- Classes -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-8">
				<h2 class="mb-4">{{$course->name}}</h2>
				<p>{{$course->description}}</p>
			</div>
			<div class="col-4">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top mx-1 my-4" src="{{asset('frontend_assets/images/moe.png')}}" alt="Card image cap">
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item text-center">Ks {{$course->price}}</li>
				    <li class="list-group-item text-center">
				    	<a href="{{route('cartPage', $course->id)}}" class="btn btn-info addtocartbtn" data-id="{{$course->id}}" data-name="{{$course->name}}" data-price="{{$course->price}}" data-discount="{{$course->discount}}">Enroll Now</a>
				    </li>
				  </ul>				  
				</div>
			</div>
			<div class="row mt-5 ml-5">
				<div class="col">
					<div class="shadow pb-1 pt-2 bg-white rounded mr-2" style="width: 220px;">
						<p class="text-center text-info"><i class="far fa-folder fa-2x"></i></p>
						<p class="text-center"><b>Type</b></p>
						<p class="text-center">{{$course->category->name}}</p>
					</div>
				</div>
				<div class="col">
					<div class="shadow pb-1 pt-2 bg-white rounded mr-2" style="width: 220px;">
						<p class="text-center text-info"><i class="fas fa-table fa-2x"></i></p>
						<p class="text-center"><b>Access</b></p>
						<p class="text-center">{{$course->access}}</p>
					</div>
				</div>
				<div class="col">
					<div class="shadow pb-1 pt-2 bg-white rounded mr-2" style="width: 220px;">
						<p class="text-center text-info"><i class="fas fa-hourglass-start fa-2x"></i></p>
						<p class="text-center"><b>Duration</b></p>
						<p class="text-center">{{$course->duration}}</p>
					</div>
				</div>
				<div class="col">
					<div class="shadow pb-1 pt-2 bg-white rounded" style="width: 220px;">
						<p class="text-center text-info"><i class="fas fa-sticky-note fa-2x"></i></p>
						<p class="text-center"><b>Certificate</b></p>
						@if($course->certificate == "1")
							<p class="text-center">Yes</p>
						@else
							<p class="text-center">No</p>
						@endif
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 mt-5">
					<p>{!!$course->note!!}</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end class -->

	{{-- related class --}}

	<div class="container-fluid bg-light">
		<h3 class="text-center mt-5 pt-4">Courses you may also like</h3>
		<hr class="hr_size1 py-3">
		<div class="row ml-2">
			@foreach($related_courses as $course)
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
					    <a href="{{route('courseDetailPage',$course->id)}}">Learn More</a>
				    </div>
				</div>				
			</div>
			@endforeach			

		</div>
	</div>
	
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