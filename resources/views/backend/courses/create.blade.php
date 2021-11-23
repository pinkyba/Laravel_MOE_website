@extends('backend_master')

@section('content')

	<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Courses </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Course add</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <h2 class="d-inline-block mb-4">Course Create Form</h2>
              <a href="{{route('courses.index')}}" class="btn btn-outline-primary float-right">
                  <i class="icofont-double-left"></i>
              </a>
              <form action="{{route('courses.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                  <label class="control-label col-md-3">Name</label>
                  <div class="col-md-8">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Enter name" name="name">
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
                            <input class="form-control @error('price') is-invalid @enderror" type="number" placeholder="Enter unit price" name="price">
                            @error('price')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-discount-tab">
                            <input class="form-control" type="number" placeholder="Enter discount" name="discount">
                        </div>
                    </div>
                    
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Description</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" name="description"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3"></label>
                  <div class="col-md-8 ml-3">                      
                      <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="certificate">
                      <label class="form-check-label" for="flexCheckDefault">
                        Status(Is Publish?)
                      </label>
                  </div>
                </div>
                 
                <div class="form-group row"> 
                    <label class="control-label col-md-3">Type</label>                  
                    <div class="col-md-8">
                        <select class="form-control" name="category_id">
                          @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                    </div>                                    
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Access</label>
                    <div class="col-md-8">
                        <select class="form-control" name="access">
                            <option value="One Month">One Month</option>
                            <option value="Two Month">Two Month</option>
                            <option value="Three Month">Three Month</option>
                            <option value="Life Time">Life Time</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Duration</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="Enter Duration" name="duration">                   
                  </div>                 
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Note</label>
                  <div class="col-md-8">
                    <textarea class="summernote" name="note"></textarea>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>
          </div>
        </div>

      </div>

    </main>
@endsection
