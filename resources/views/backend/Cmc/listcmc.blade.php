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
                 <a href="{{Url('addcmc')}}" class="btn btn-primary">Add</a>
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
                           DESCRIPTION
                          </th>
                          <th>
                            STATUS
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
                          {{$showdatas->desc}}
                          </td>
                          <td>
                        @if($showdatas->status=='1')
                                                 <a href="{{url('status-update/'.$showdatas->id)}}" class="btn btn-primary">Active</a>

                                                 @elseif($showdatas->status==0)
                                                 <a href="{{url('status-update/'.$showdatas->id)}}" class="btn btn-warning">Deactive</a>
                                                 @endif
                       </td>
                         
                        <td> 
                           <a href="" class="btn btn-danger">DELETE</a> | 
                                                 
                        <a href="" class="btn btn-primary">Edit</a>
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
        </div>
                              
                                   
                       
@endsection