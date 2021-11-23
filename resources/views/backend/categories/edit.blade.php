@extends('backend_master')

@section('content')

	<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Categories</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <h2 class="d-inline-block mb-4">Category Edit Form</h2>
              <a href="{{route('categories.index')}}" class="btn btn-outline-primary float-right">
                  <i class="icofont-double-left"></i>
              </a>

              {{-- carry id of passed data from edit controller to update function of controller --}}
              <form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                {{-- for update,put use @method('PUT') --}}
                @method('PUT')

                <div class="row">
                  <div class="col-8">
                    <div class="form-group">
                      <label for="exampleInputName">Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Category Name" name="name" value="{{$category->name}}">
                      @error('name')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>                                
                <button type="submit" class="btn btn-primary mt-2">Edit</button>
              </form>
            </div>
          </div>
        </div>

      </div>

    </main>

@endsection