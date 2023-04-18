@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
       <div class="row">
          <div class="col-xxl-12">
             <div class="card">
                <div class="card-header">
                   <h4 class="card-title">Catering Information</h4>
                </div>
                <div class="card-body">
                   <div class="basic-form">
                      <form method="POST" action="{{ route('catering.update',$catering->id) }}">
                        @csrf
                        @method('PUT')
                         <div class="form-group">
                            <label for="" class="text-dark">Catering Name</label>
                            <input type="text" name="catering_name" class="form-control input-rounded" placeholder="Catering Name" value="{{ $catering->catering_name }}">
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Catering Phone No</label>
                            <input type="text" class="form-control input-rounded" name="phone_no" placeholder="Phone No" value="{{ $catering->phone_no }}">
                            
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Catering Address</label>
                            <textarea name="address" id="" cols="30" rows="10" class="form-control" placeholder="Address">{{ $catering->address }}</textarea>
                            
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Catering Address</label>
                            <select name="status" id="" class="form-control input-rounded">
                                <option value="">Select</option>
                                <option value="active">Active</option>
                                <option value="deactive">Deactive</option>
                            </select>
                            {{-- @error('status')
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
