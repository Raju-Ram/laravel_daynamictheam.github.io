@extends('backend/default')
@section('coman')
      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           
                  
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">USERS LIST</h4>
                  <p class="card-description">
                 <a href="{{url('/adduser')}}" class="btn btn-primary">Add</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th>
                            SR.NO
                          </th>
                          <th>
                           NAME
                          </th>
                          <th>
                            EMAIL
                          </th>
                          <th>
                            MOBILE
                          </th>
                          <th>
                            ADDRESS
                          </th>
                          <th>
                            ACTION
                          </th>
                        </tr>
                      </thead>
                     
                      <tbody>
                      @foreach($User as  $key=>$showdatas)
                        <tr>
                          <td>
                          {{$key+1}}
                          </td>
                          <td>
                          {{$showdatas->name}}
                          </td>
                          <td>
                          {{$showdatas->email}}
                          </td>
                          <td>
                          {{$showdatas->mobile}}
                          </td>
                          <td>
                          {{$showdatas->address}}
                          </td>
                        <td>  <a href="{{url('deleteUser/'.$showdatas->id)}}" class="btn btn-danger">DELETE</a> | 
                                                 
                                                 <a href="{{url('edituserlist/'.$showdatas->id)}}" class="btn btn-primary">Edit</a></td>
                                                 
                                                
                                           
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       @endsection