@extends('backend_master')

@section('content')

  <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Courses</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Courses Edit</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <h2 class="d-inline-block">Course Edit Form</h2>
              <a href="{{route('courses.index')}}" class="btn btn-outline-primary float-right">
                  <i class="icofont-double-left"></i>
              </a>
              <form action="{{route('courses.update',$course->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group row">
                  <label class="control-label col-md-3">Name</label>
                  <div class="col-md-8">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Enter name" name="name" value="{{$course->name}}">
                    @error('name')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>                 
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Price</label>
                  <div class="col-md-8">
                    <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" id="nav-unit-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Unit Price </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="nav-discount-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Discount</a>
                      </li>
                      
                    </ul><br>
                    
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-unit-tab">
                            <input class="form-control @error('price') is-invalid @enderror" type="number" placeholder="Enter unit price" name="price" value="{{$course->price}}">
                            @error('price')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-discount-tab">
                            <input class="form-control" type="number" placeholder="Enter discount" name="discount" value="{{$course->discount}}">
                        </div>
                    </div>
                    
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Description</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" name="description">{!!$course->description!!}"</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3"></label>
                  <div class="col-md-8 ml-3">
                    
                      @if($course->certificate == "1")
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="certificate" checked="">
                      @else
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="certificate">
                      @endif
                      <label class="form-check-label" for="flexCheckDefault">
                        Certificate(Is Checked?)
                      </label>
                    
                  </div>
                </div>
                <div class="form-group row"> 
                    <label class="control-label col-md-3">Type</label>                  
                    <div class="col-md-8">
                        <select class="form-control" name="category_id">
                          @foreach($categories as $category)
                            @if($course->category_id == $category->id)
                              <option value="{{$category->id}}" selected="">{{$category->name}}</option>
                            @else
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                          @endforeach
                        </select>
                    </div>                                    
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Access</label>
                    <div class="col-md-8">
                        <select class="form-control" name="access">
                          @if($course->access == "One Month")
                            <option value="One Month" selected="">One Month</option>
                          @else
                            <option value="One Month">One Month</option>
                          @endif
                          @if($course->access == "Two Month")
                            <option value="Two Month" selected="">Two Month</option>
                          @else
                            <option value="Two Month">Two Month</option>
                          @endif
                          @if($course->access == "Three Month")
                            <option value="Three Month" selected="">Three Month</option>
                          @else
                            <option value="Three Month">Three Month</option>
                          @endif
                          @if($course->access == "Life Time")
                            <option value="Life Time" selected="">Life Time</option>
                          @else
                            <option value="Life Time">Life Time</option>
                          @endif
                          
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Duration</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="Enter Duration" name="duration" value="{{$course->duration}}">                   
                  </div>                 
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Note</label>
                  <div class="col-md-8">
                    <textarea class="summernote" name="note">{!!$course->note!!}</textarea>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
              </form>
            </div>
          </div>
        </div>

      </div>

    </main>
@endsection
@section('slider')
  <style>
    .carousel-cell {
      width: 40%;
      height: 120px;
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
  <script type="text/javascript">
    $(document).ready(function() {
     $('#summernote').summernote({
        onKeyup: function(e) {
           $("#summernote").code();
        },
        height: 300,
     });
});
  </script>
@endsection