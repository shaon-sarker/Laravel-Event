@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
       <div class="row">
          <div class="col-xxl-12">
             <div class="card">
                <div class="card-header">
                   <h4 class="card-title">Decoration Information</h4>
                </div>
                <div class="card-body">
                   <div class="basic-form">
                      <form method="post" action="{{ route('decoration.store') }}">
                        @csrf
                         <div class="form-group">
                            <label for="" class="text-dark">Decoration Name</label>
                            <input type="text" name="decoration_name" class="form-control input-rounded @error('decoration_name') is-invalid @enderror" placeholder="Decoration Name">
                           @error('decoration_name')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Decoration Phone No</label>
                            <input type="number" class="form-control input-rounded @error('phone_no') is-invalid @enderror" name="phone_no" placeholder="Phone No">
                            @error('phone_no')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Decoration Address</label>
                            <textarea name="address" id="" cols="30" rows="10" class="form-control @error('address') is-invalid @enderror" name="phone_no" placeholder="Address"></textarea>
                            @error('address')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group">
                           <label for="" class="text-dark">Decoration Type</label>
                           <select name="decoration_type" id="" class="form-control input-rounded @error('decoration_type') is-invalid @enderror">
                               <option value="">Select</option>
                               <option value="lighting-system">Lighting System</option>
                               <option value="stage-setup">Stage Setup</option>
                           </select>
                           @error('decoration_type')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                          @enderror
                        </div>
                         <button type="submit" class="btn btn-secondary">Save</button>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
