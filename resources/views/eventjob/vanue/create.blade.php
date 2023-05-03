@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
       <div class="row">
          <div class="col-xxl-12">
             <div class="card">
                <div class="card-header">
                   <h4 class="card-title">Vanue Information</h4>
                </div>
                <div class="card-body">
                   <div class="basic-form">
                      <form method="post" action="{{ route('vanue.store') }}">
                        @csrf
                         <div class="form-group">
                            <label for="" class="text-dark">Vanue Name</label>
                            <input type="text" name="vanue_name" class="form-control input-rounded @error('vanue_name') is-invalid @enderror" placeholder="Vanue Name">
                           @error('vanue_name')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Vanue Address</label>
                            <textarea name="address" id="" cols="30" rows="10" class="form-control @error('address') is-invalid @enderror" placeholder="Address"></textarea>
                            @error('address')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group">
                           <label for="" class="text-dark">Vanue Location</label>
                           <input type="text" name="location" class="form-control input-rounded @error('location') is-invalid @enderror" placeholder="Vanue Location">
                           @error('location')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                         <div class="form-group">
                           <label for="" class="text-dark">Vanue Type</label>
                           <select name="vanue_type" id="" class="form-control input-rounded @error('vanue_type') is-invalid @enderror">
                               <option value="">Select</option>
                               <option value="restaurant">Restaurant</option>
                               <option value="convention-hall">Convention Hall</option>
                               <option value="prefred-area">Prefred Area</option>
                           </select>
                           @error('vanue_type')
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
