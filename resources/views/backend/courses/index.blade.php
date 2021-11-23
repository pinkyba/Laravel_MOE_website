@extends('backend_master')

@section('content')

	<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Items</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Home</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
         	
          <div class="tile">
            <div class="tile-body">
              <h2 class="d-inline-block">Course List</h2>
              <a href="{{route('courses.create')}}" class="btn btn-primary float-right">Add New</a>
              <div class="table-responsive mt-3">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Type</th>
                      <th scope="col">Price</th>
                      <th scope="col">Duration</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $i=1;
                    @endphp
                    @foreach($courses as $course)
                    
                    <tr>
                      <th scope="row">{{$i++}}</th>
                      
                      <td>{{$course->name}}</td>
                      <td>{{$course->category->name}}</td>
                      
                      @if($course->discount)
                        <td>
                          {{number_format($course->discount,2)}} Ks <br>
                          <del>{{number_format($course->price,2)}} Ks</del>
                        </td>
                      @else
                        <td>{{number_format($course->price)}} Ks</td>
                      @endif

                      <td>{{$course->duration}}</td>
                      <td>
                        <a href="{{route('courses.show',$course->id)}}" class="btn btn-warning d-inline-block">Detail</a>
                        <a href="{{route('courses.edit',$course->id)}}" class="btn btn-warning d-inline-block">Edit</a>
                        
                        {{-- delete button --}}
                        <form method="post" action="{{route('courses.destroy',$course->id)}}" onsubmit="return confirm('Are you sure to delete?')" class="d-inline-block">
                          @csrf
                          @method('DELETE')
                          <input type="submit" name="btn-delete" class="btn btn-danger" value="Delete">
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>

    </main>

@endsection

@section('script')
  <script type="text/javascript" src="{{asset('backend_assets/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend_assets/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection