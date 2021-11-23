@extends('backend_master')

@section('content')

	<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Course Detail</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Detail</a></li>
      </ul>
    </div>

    <div class="tile">
      <div class="tile-body"> 
        <a href="{{route('courses.index')}}" class="btn btn-outline-primary float-right">
            <i class="icofont-double-left"></i>
        </a>
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-transparent fontsize">
                <li class="breadcrumb-item">
                  <a href="{{route('courses.index')}}" class="text-decoration-none secondarycolor"> Home </a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#" class="text-decoration-none secondarycolor"> Course </a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#" class="text-decoration-none secondarycolor"> {{$course->category->name}} </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                {{$course->name}}
                </li>
              </ol>
          </nav>

          <div class="row mt-5">
            
            <div class="col-xl-12 col-lg-2 col-md-12 col-sm-12 col-12 fontsize">        
              <h1 class="mb-5"> {{$course->name}} </h1>
              <p> 
                <span class="text-uppercase"> Type : </span>
                <span class="ml-3">  {{$course->category->name}}</span>
              </p>
              <p> 
                <span class="text-uppercase"> Description : </span>
                <span class="ml-3 d-inline-block">  {!!$course->description!!}</span>
              </p>
              <p> 
                <span class="text-uppercase"> Price : </span>
                <span class="ml-3">  {{number_format($course->price,2)}} Ks</span>
              </p>
              <p> 
                <span class="text-uppercase"> Discount : </span>
                @if($course->discount)
                  
                  <span class="maincolor ml-3 font-weight-bolder"> {{number_format($course->discount,2)}} Ks </span>
                @else
                <span class="maincolor ml-3 font-weight-bolder"> 0 Ks </span>
                @endif
              </p>
              <p> 
                <span class="text-uppercase"> Certificate : </span>
                <span class="ml-3">
                  @if($course->certificate == "1")
                    <span class="ml-3">Yes</span>
                  @else
                    <span class="ml-3">No</span>
                  @endif
                </span>
              </p>
              <p> 
                <span class="text-uppercase"> Access : </span>
                <span class="ml-3">  {{$course->access}}  </span>
              </p>
              <p> 
                <span class="text-uppercase"> Duration : </span>
                <span class="ml-3">  {{$course->duration}} </span>
              </p>
              <p> 
                <span class="text-uppercase"> More Note : </span>
                <span class="ml-3 d-inline-block">  {!!$course->note!!}</span>
              </p>  
            </div>
          </div>
          <br><br>
        </div> 
      </div>

    </main>
@endsection
@section('slider')
  <style>
    .carousel-cell {
      width: 40%;
      height: 100px;
      margin-right: 16px;
      border-radius: 5px;
      counter-increment: carousel-cell;
    }


    /* cell number */
    .carousel-cell:before {
      display: block;
      text-align: center;
      line-height: 200px;
      font-size: 20px;
      color: white;
    }
    .fontsize{
      font-size: 16px;
    }
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@endsection