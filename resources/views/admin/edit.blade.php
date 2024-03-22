<!DOCTYPE html>
<html>
  <head> 
    <style>
        .post_title
        {
            text-align: center;
            font-size: 30px;
            padding: 30px;
            font-weight: bold;
            color: azure;
        }
        .div_center
        {
            padding: 30px;
            text-align: center;
        }
        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>
    <base href="/public">
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
    

    <div class="container">
      <form action="{{url('update',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Name</label>
              <input type="text" name="name" class="form-control" id="inputEmail4" value="{{ $data->name }}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Email</label>
              <input type="email" name="email" class="form-control" id="inputPassword4" value="{{ $data->email }}">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Session</label>
              <input type="text" name="sess_ion" class="form-control" id="inputEmail4"  value="{{$data->sess_ion}}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Phone</label>
              <input type="text" name="phone" class="form-control" id="inputPassword4" value="{{$data->phone}}">
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Address</label>
              <input type="text" name="address" class="form-control" id="inputEmail4" value="{{$data->address}}">
            </div>
            
          </div>


          


      
          {{-- <input type="submit" class="btn btn-primary"> --}}
          <button type="submit" class="btn btn-primary">Update</button>
        </form>


    </div>

      </div>
       @include('admin.footer')
  </body>
</html>