@extends('frontend_master')

@section('content')
	
	<!-- Carousel -->
	<div class="carousel slide" data-ride="carousel" id="Carousel">
		<div class="carousel-inner" >
			<div class="carousel-item active">
				<img src="{{asset('frontend_assets/images/account.jpg')}}" class="img-fluid w-100" style="opacity: 0.8;">					
			</div>				
			
			<h1 class="courseCrousel_title text-center">Your Account</h1>
			<p class="courseCrousel text-center">Please Login or Sign up to checkout</p>
		</div>
		
	</div>
	<!-- end carousel -->

	<div class="container mt-5">
		<p class="about_text"> Please Login to Enroll </p>
		<hr class="hr_size"><br>
	</div>

	{{-- login , registration form --}}
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h3 class="text-info">Login</h3><br>
				<div class="card">
					<form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group m-4">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group m-4">
                            <label for="password">{{ __('Password') }}</label>

                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group m-4">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
				</div>
			</div>

			{{-- register --}}
			<div class="col-6">
				<h3 class="text-info">Sign Up</h3><br>			
				<div class="card">
					<form method="POST" action="{{ route('register') }}">
	                    @csrf

	                    <div class="form-group m-4">
	                        <label for="name">{{ __('Name') }}</label>

	                        <div class="form-group">
	                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

	                            @error('name')
	                                <span class="invalid-feedback" role="alert">
	                                    <strong>{{ $message }}</strong>
	                                </span>
	                            @enderror
	                        </div>
	                    </div>

	                    <div class="form-group m-4">
	                        <label for="email">{{ __('E-Mail Address') }}</label>

	                        <div class="form-group">
	                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

	                            @error('email')
	                                <span class="invalid-feedback" role="alert">
	                                    <strong>{{ $message }}</strong>
	                                </span>
	                            @enderror
	                        </div>
	                    </div>

	                    <div class="form-group m-4">
	                        <label for="password">{{ __('Password') }}</label>

	                        <div class="form-group">
	                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

	                            @error('password')
	                                <span class="invalid-feedback" role="alert">
	                                    <strong>{{ $message }}</strong>
	                                </span>
	                            @enderror
	                        </div>
	                    </div>

	                    <div class="form-group m-4">
	                        <label for="password-confirm">{{ __('Confirm Password') }}</label>

	                        <div class="form-group">
	                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
	                        </div>
	                    </div>

	                    <div class="form-group m-4">
	                        <div class="form-group">
	                            <button type="submit" class="btn btn-info">
	                                {{ __('Signup') }}
	                            </button>
	                        </div>
	                    </div>
	                </form>
	            </div>
			</div>
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

@endsection