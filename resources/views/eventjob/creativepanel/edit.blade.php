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
                      <form method="post" action="{{ route('creativepanel.update',$creativepanel->id) }}">
                        @csrf
                        @method('PUT')

                         <div class="form-group">
                            <label for="" class="text-dark">Decoration Name</label>
                            <input type="text" name="creativepanel_name" value="{{ $creativepanel->creativepanel_name }}"class="form-control input-rounded" placeholder="Decoration Name">
                           {{-- @error('decoration_name')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror --}}
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Decoration Phone No</label>
                            <input type="number" value="{{ $creativepanel->phone_no }}" class="form-control input-rounded" name="phone_no" placeholder="Phone No">
                            {{-- @error('phone_no')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror --}}
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Address</label>
                            <textarea name="address" id="" cols="30" rows="10" class="form-control" placeholder="Address">{{ $creativepanel->address }}</textarea>
                            {{-- @error('address')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror --}}
                         </div>
                         <div class="form-group">
                           <label for="" class="text-dark">panel Type</label>
                           <select name="panel_type" id="" class="form-control input-rounded">
                               <option value="">Select</option>
                               <option {{ ($creativepanel->panel_type == 'sound-system') ? 'Selected':'' }} value="sound-system">Sound System</option>
                               <option {{ ($creativepanel->panel_type == 'photoghraper') ? 'Selected':'' }} value="photoghraper">Photoghraper</option>
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
