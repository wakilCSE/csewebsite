<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      
      <div class="page-content">
        @if(session()->has('message'))

        <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
         {{ session()->get('message') }}
        </div>


        @endif

        {{-- <div class="title"  ><strong>User Table</strong></div> --}}
        <div class="table-responsive"> 
          <table class="table">
            <thead>
              <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Department</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Image</th>
                <th>Action</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($faculties as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->designation}}</td>
                <td>{{$item->dept}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->mobile}}</td>
                <td>{{$item->image}}</td>

                <td>
                  <a href="{{url('faculty_edit',$item->id)}}" class="btn btn-sm btn-info">edit</a>
                </td>
                <td>
                  <a href="{{url('faculty_delete',$item->id)}}" class="btn btn-sm btn-danger">delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      </div>


       @include('admin.footer')
  </body>
</html>