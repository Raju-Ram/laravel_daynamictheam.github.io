@extends('backend/default')
@section('coman')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           
                  
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">BANNER LIST</h4>
                  <p class="card-description">
                 <a href="{{Url('addbanner')}}" class="btn btn-primary">Add</a>
                  </p>
                  <div class="table-responsive pt-3">
    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th>
                            SR.NO
                          </th>
                          <th>
                           TITLE
                          </th>
                          <th>
                            IMAGE
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
                          {{$showdatas->title}}
                          </td>
                          <td>
                          <img src="{{url('Users/'.$showdatas->image)}}">
                          </td>
                         
                        <td>  <a href="" class="btn btn-danger">DELETE</a> | 
                                                 
                                                 <a href="" class="btn btn-primary">Edit</a></td>
                                                 
                                                
                                           
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
                              
                                   
                       
@endsection