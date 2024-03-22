<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Dashboard</h2>
      </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-user-1"></i></div><strong>Total User</strong>
                </div>
                <div class="number dashtext-1">{{$usercount}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-contract"></i></div><strong>Admincount</strong>
                </div>
                <div class="number dashtext-2">{{$admincount}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>

                
              </div>
            </div>
          </div>

      
        </div>
      </div>
    </section>

    {{-- <div>
      <table class="table table-responsive">
        <thead class="div">
          <tr>SL</tr>
          <tr>Name</tr>
          <tr>Email</tr>
          <tr>Seesion</tr>
          <tr>Phone</tr>
          <tr>address</tr>
        </thead>
        <tbody>
         @foreach ($users as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->sess_ion}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->phone}}</td>
            <td>
              <a href="" class="btn btn-sm btn-info">edit</a>
            </td>
            <td>
              <a href="" class="btn btn-sm btn-danger">delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>

      </table>
    </div> --}}
    
    @if(session()->has('message'))

    <div class="alert alert-success">

      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
     {{ session()->get('message') }}
    </div>
    @endif

    <div class="title"  ><strong>User Table</strong></div>
    <div class="table-responsive"> 
      <table class="table">
        <thead>
          <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>Session</th>
            <th>phone</th>
            <th>Address</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->sess_ion}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->phone}}</td>
            <td>
              <a href="{{url('edit',$item->id)}}" class="btn btn-sm btn-info">edit</a>
            </td>
            <td>
              <a href="{{url('delete',$item->id)}}" class="btn btn-sm btn-danger">delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>