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
                <th>Date</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>PDF</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($notices as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->date}}</td>
                <td>{{substr($item->title,0,50)}}</td>
                <td>{{substr($item->description,0,50)}}</td>
                <td><img src="{{asset($item->image)}}" style="width: 50px; height:50px"></td>
                <td>
                  @if(!empty($item->pdf))
                       <span>
                    <a href="{{asset($item->pdf)}}" class="btn btn-sm btn-info">view</a>
                  </span>
                  @endif
                </td>
                <td>
                  <span>
                    <a href="{{route('notice_edit',$item->id)}}" class="btn btn-sm btn-info">edit</a>
                  </span>
                  <span>
                    <a href="{{route('notice_delete',$item->id)}}"  class="btn btn-sm btn-danger">delete</a>
                  </span>
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