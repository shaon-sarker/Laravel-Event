@extends('layouts.backend.app')
@section('content')
@push('admin.css')
<style>
    #container {
        width: 1000px;
        margin: 20px auto;
    }
    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 200px;
    }
    .ck-content .image {
        /* block images */
        max-width: 80%;
        margin: 20px auto;
    }
</style>
@endpush
<div class="content-body">
    <div class="container-fluid">
       <div class="row">
          <div class="col-xxl-12">
             <div class="card">
                <div class="card-header">
                   <h4 class="card-title">Services Information</h4>
                </div>
                <div class="card-body">
                   <div class="basic-form">
                      <form method="post" action="{{ route('service.update',$service->id) }}">
                        @csrf
                        @method('PUT')
                         <div class="form-group">
                            <label for="" class="text-dark">Vanue Name</label>
                            <select name="vanue_id" class="form-control input-rounded @error('vanue_id') is-invalid @enderror">
                                <option value="">Select One</option>
                                @foreach ($vanue_list as $vanue)
                                <option {{ $service->vanue_id === $vanue->id ? 'Selected':'' }} value="{{ $vanue->id }}">{{ $vanue->vanue_name }}</option>
                                @endforeach
                            </select>
                            @error('vanue_id')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                            @enderror
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Services Info</label>
                            <textarea name="service_list_name" id="service_list_name" cols="30" rows="10" class="text-dark form-control @error('service_list_name') is-invalid @enderror" placeholder="">{{ $service->service_list_name }}</textarea>
                            @error('service_list_name')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group">
                           <label for="" class="text-dark">Price</label>
                           <input type="text" name="service_price" class="form-control input-rounded @error('service_price') is-invalid @enderror" placeholder="Service Price" value="{{ $service->service_price }}">
                           @error('service_price')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                         <div class="form-group">
                           <label for="" class="text-dark">Services Type</label>
                           <select name="service_type" id="" class="form-control input-rounded @error('service_type') is-invalid @enderror">
                               <option value="">Select</option>
                               <option {{ ($service->service_type == 'Basic') ? 'Selected':'' }} value="Basic">Basic</option>
                               <option {{ ($service->service_type == 'Standard') ? 'Selected':'' }} value="Standard">Standard</option>
                               <option {{ ($service->service_type == 'Premium') ? 'Selected':'' }} value="Premium">Premium</option>
                           </select>
                           @error('service_type')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                          @enderror
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
@push('admin.js')
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#service_list_name' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush
