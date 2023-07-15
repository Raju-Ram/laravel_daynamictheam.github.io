@extends('backend/default')
@section('coman')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
  
                <div class="card-body">
      
                  <h4 class="card-title">Edit User </h4>
                  <p class="card-description">
                
                  </p>
                  <form method="post" class="forms-sample">

                  @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="name" value="{{$edituser->name}}">
                      @error('name')
                 <p style="color:red;">{{$message}}</p>
                @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="{{$edituser->email}}">
                      @error('email')
                 <p style="color:red;">{{$message}}</p>
                @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Mobile</label>
                      <input type="number" class="form-control" id="exampleInputPassword1" placeholder="number" name="mobile" value="{{$edituser->mobile}}">
                      @error('mobile')
                 <p style="color:red;">{{$message}}</p>
                @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Address</label>
                      <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Address" name="address" value="{{$edituser->address}}">
                      @error('address')
                 <p style="color:red;">{{$message}}</p>
                @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{url('showuserlist')}}" class="btn btn-dark" >BACK</a>
                  </form>
                </div>
    
              </div>
            </div>
                      </div>
        </div>
        @endsection