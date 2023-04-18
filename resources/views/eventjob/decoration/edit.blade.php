@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
       <div class="row">
          <div class="col-xxl-12">
             <div class="card">
                <div class="card-header">
                   <h4 class="card-title">Decoration Information Update</h4>
                </div>
                <div class="card-body">
                   <div class="basic-form">
                      <form method="post" action="{{ route('decoration.update',$decoration->id) }}">
                        @csrf
                        @method('PUT')

                         <div class="form-group">
                            <label for="" class="text-dark">Decoration Name</label>
                            <input type="text" name="decoration_name" value="{{ $decoration->decoration_name }}"class="form-control input-rounded" placeholder="Decoration Name">
                           {{-- @error('decoration_name')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror --}}
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Decoration Phone No</label>
                            <input type="number" value="{{ $decoration->phone_no }}" class="form-control input-rounded" name="phone_no" placeholder="Phone No">
                            {{-- @error('phone_no')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror --}}
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Decoration Address</label>
                            <textarea name="address" id="" cols="30" rows="10" class="form-control" placeholder="Address">{{ $decoration->address }}</textarea>
                            {{-- @error('address')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror --}}
                         </div>
                         <div class="form-group">
                           <label for="" class="text-dark">Decoration Type</label>
                           <select name="decoration_type" id="" class="form-control input-rounded">
                               <option value="">Select</option>
                               <option {{ ($decoration->decoration_type == 'lighting-system') ? 'Selected':'' }} value="lighting-system">Lighting System</option>
                               <option {{ ($decoration->decoration_type == 'stage-setup') ? 'Selected':'' }} value="stage-setup">Stage Setup</option>
                           </select>
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
