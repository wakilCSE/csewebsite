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
            <h1 class="post_title">Add Notice</h1>
            <div class="container">
              
               <form action="{{ route('notice_store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Title</label>
                      <input type="text" name="title" class="form-control" id="inputEmail4" placeholder="title name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Date</label>
                      <input type="date" name="date" class="form-control" id="inputEmail4" placeholder="enter date">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputPassword4">Description</label>
                      <input type="text" name="description" class="form-control" id="inputPassword4" placeholder="  description">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Add Image</label>
                      <input type="file" name="image">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Add Pdf</label>
                      <input type="file" name="pdf">
                    </div>
                  </div>
                  <input type="submit" class="btn btn-primary">
                </form>


            </div>

        </div>
        @include('admin.footer')
</body>

</html>
