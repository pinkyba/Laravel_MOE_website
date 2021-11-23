@extends('backend_master')

@section('content')

	<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Categories</h1>
          
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
              <h2 class="d-inline-block">Category List</h2>
              <a href="{{route('categories.create')}}" class="btn btn-primary float-right">Add New</a>
              <div class="table-responsive mt-3">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $i=1;
                    @endphp
                    @foreach($categories as $row)
                    
                    <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$row->name}}</td>
                      <td>
                        {{-- edit button/// you must carry id --}}
                        <a href="{{route('categories.edit',$row->id)}}" class="btn btn-sm btn-warning mr-2">Edit</a>

                        {{-- delete button --}}
                        <form method="post" action="{{route('categories.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                          @csrf
                          @method('DELETE')
                          <input type="submit" name="btn-delete" class="btn btn-danger btn-sm" value="Delete">
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