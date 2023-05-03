@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
       <div class="row">
          <div class="col-xxl-12">
             <div class="card">
                <div class="card-header">
                   <h4 class="card-title">Vanue Update Information</h4>
                </div>
                <div class="card-body">
                   <div class="basic-form">
                      <form method="post" action="{{ route('vanue.update',$vanue->id) }}">
                        @csrf
                        @method('PUT')
                         <div class="form-group">
                            <label for="" class="text-dark">Vanue Name</label>
                            <input type="text" name="vanue_name" class="form-control input-rounded placeholder="Vanue Name" value="{{ $vanue->vanue_name }}">
                           {{-- @error('vanue_name')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror --}}
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Vanue Address</label>
                            <textarea name="address" id="" cols="30" rows="10" class="form-control placeholder="Address">{{ $vanue->address}}</textarea>
                            {{-- @error('address')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror --}}
                         </div>
                         <div class="form-group">
                           <label for="" class="text-dark">Vanue Location</label>
                           <input type="text" name="location" class="form-control input-rounded" placeholder="Vanue Location" value="{{ $vanue->location }}">
                           {{-- @error('location')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror --}}
                        </div>
                         <div class="form-group">
                           <label for="" class="text-dark">Vanue Type</label>
                           <select name="vanue_type" id="" class="form-control input-rounded">
                               <option value="">Select</option>
                               <option {{ ($vanue->vanue_type == 'restaurant') ? 'Selected':'' }} value="restaurant">Restaurant</option>
                               <option {{ ($vanue->vanue_type == 'convention-hall') ? 'Selected':'' }} value="convention-hall">Convention Hall</option>
                               <option {{ ($vanue->vanue_type == 'prefred-area') ? 'Selected':'' }} value="prefred-area">Prefred Area</option>
                           </select>
                           {{-- @error('vanue_type')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                          @enderror --}}
                        </div>
                         <button type="submit" class="btn btn-secondary">Update</button>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
