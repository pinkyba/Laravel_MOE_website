@extends('frontend_master')

@section('content')
	<!-- Carousel -->
	<div class="carousel slide" data-ride="carousel" id="Carousel">
		<div class="carousel-inner" >
			<div class="carousel-item active">
				<img src="{{asset('frontend_assets/images/cart.jpg')}}" class="img-fluid w-100" style="opacity: 0.6;">					
			</div>				
			
			<h1 class="courseCrousel_title text-center">MOE COURSES</h1>
			<p class="courseCrousel text-center">You can learn every where and every time</p>
		</div>
		
	</div>
	<!-- end carousel -->
	
	<div class="container mt-5">
		<p class="about_text"> Cart Detail </p>
		<hr class="hr_size"><br>
	</div>

	<br>
	<!-- cart -->
	<div class="container">
		<div class="row">
			<table class="table table-responsive table-light p-5" style="margin-left: 60px;">
				<thead>
					<th class="ml-5">NAME</th>
					<th>PRICE</th>
					<th>QUANTITY</th>
					<th>SUBTOTAL</th>
					<th>ACTION</th>
				</thead>
				<tbody class="cart_table">
					
				</tbody>
				<tr id="cart_total">
					
				</tr>
				<tfoot>
					
					<tr>
					<td>
						<input type="text" name="coupon" class="form-control">						
					</td>
					<td>
						<button class="btn btn-info">Apply Coupon</button>
					</td>
					<td colspan="3">						
						@auth
							<a href="{{route('accountInfoPage')}}" class="btn btn-info" style="margin-left: 130px;">Proceed To Checkout</a>
						@else
							<a href="{{route('accountPage')}}" class="btn btn-info" style="margin-left: 130px;">Proceed To Checkout</a>
						@endauth
					</td>
					</tr>
				</tfoot>
			</table>			
		</div>
	</div>


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
	<script type="text/javascript">
		$(document).ready(function() {
			$('.btndecrease').on('click', function(){			
				var c = $('.input-number').val()-1;				
				$('.input-number').val(c)							
			})

			$('.btnincrease').on('click', function(){
				var c = $('.input-number').val()+1;
				$('.input-number').val(c)
			})
		});
	</script>
@endsection