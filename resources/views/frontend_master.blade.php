<!DOCTYPE html>
<html>
<head>
	<title>MOE</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend_assets/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend_assets/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend_assets/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Animation on scroll webpage ref(https://github.com/michalsnik/aos)  -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
	<!-- Nav bar -->
	<!-- use fixed-top to display nav bar with carousel background -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<img src="{{asset('frontend_assets/images/logo.png')}}" class="logo_img mt-2 ml-5 mr-2">	
		<a href="index.html" class="navbar-brand logo_text mt-2">Myanmar Online Entrepreneur</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#Navbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="Navbar">
			<ul class="navbar-nav ml-auto mr-5">
				<li class="nav-item mx-2">
					<a href="{{route('homepage')}}" class="nav-link" >Home</a>
				</li>
				<li class="nav-item dropdown mx-2">
				    <a class="nav-link  dropdown-toggle" href="{{route('coursePage')}}">  Courses  </a>
				    <ul class="dropdown-menu fade-up">
					  <li><a class="dropdown-item" href="class.html" style="color: black !important;"> Class SNS - Study Note Session </a></li>
					  
				    </ul>
				</li>
				<li class="nav-item mx-2">
					<a href="{{route('bookPage')}}" class="nav-link">Books</a>
				</li>
				<li class="nav-item mx-2">
					<a href="{{route('aboutPage')}}" class="nav-link">About</a>
				</li>
				<li class="nav-item mx-2">
					<a href="{{route('contactPage')}}" class="nav-link">Contact</a>
				</li>
				<li class="nav-item mx-2">
					@auth
						<a href="{{route('accountInfoPage')}}" class="nav-link">Account</a>
					@else
						<a href="{{route('accountPage')}}" class="nav-link">Account</a>
					@endauth
				</li>
				<li class="nav-item mx-2">
					<a href="{{route('cartPage')}}" class="single-icon">
	                	<i class="fas fa-cart"></i>  <span class="total-count cartNoti"></span>
	                </a>
				</li>
			</ul>
		</div>
	</nav>		
	<!-- end navbar -->

	@yield('content')
	
	

	<script type="text/javascript" src="{{asset('frontend_assets/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend_assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<script type="text/javascript" src="{{asset('frontend_assets/custom.js')}}"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script type="text/