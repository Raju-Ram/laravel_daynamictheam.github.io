@extends('backend/default')
@section('coman')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Cmc</h4>
                  <p class="card-description">
                
                  </p>
                  <form method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="title" class="control-label mb-1">Title</label>
                                                <input id="title" value="" name="title" type="text" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger" role="alert">
                                                {{$message}}
										</div>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                           <label for="desc" class="control-label mb-6">Description</label>
                           <input name="desc" type="text" class="form-control">
                           @error('image')
                           <div class="alert alert-danger" role="alert">
                              {{$message}}
                           </div>
                           @enderror
                        </div>
                                            <div class="form-group">
                           <label for="status" class="control-label mb-6">status</label>
                           <input name="status" type="text" class="form-control">
                           @error('image')
                           <div class="alert alert-danger" role="alert">
                              {{$message}}
                           </div>
                           @enderror
                        </div>
                             <div>
                                           
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                            </div>
                                            
                                        </form>
                </div>
              </div>
            </div>
                      </div>
        </div>
        @endsection