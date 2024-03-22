<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        .post_title {
            text-align: center;
            font-size: 30px;
            padding: 30px;
            font-weight: bold;
            color: azure;
        }

        .div_center {
            padding: 30px;
            text-align: center;
        }

        label {
            display: inline-block;
            width: 200px;
        }
    </style>
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
            <h1 class="post_title">Add Post</h1>
            <div class="container">
                


               <form action="{{ url('add_faculty') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Name</label>
                      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name of the faculty">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Email</label>
                      <input type="email" name="email" class="form-control" id="inputPassword4" placeholder="Enter email">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Desingation</label>
                      <input type="text" name="designation" class="form-control" id="inputEmail4" placeholder="Enter Designation  ">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Department</label>
                      <input type="text" name="dept" class="form-control" id="inputPassword4" placeholder="Enter department">
                    </div>
                  </div>


                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Mobile</label>
                      <input type="text" name="mobile" class="form-control" id="inputEmail4" placeholder="Name mobile number">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Add Image</label>
                      <input type="file" name="image">
                    </div>
                  </div>


                  


              
                  <input type="submit" class="btn btn-primary">
                </form>


            </div>

        </div>
        @include('admin.footer')
</body>

</html>
