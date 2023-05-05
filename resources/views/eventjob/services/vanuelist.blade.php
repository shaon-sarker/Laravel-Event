@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
       <div class="row">
          <div class="col-xxl-12">
             <div class="card">
                <div class="card-header">
                   <h4 class="card-title">Service Type Basic/Standard/Premium</h4>
                </div>
                <div class="card-body">
                   <div class="basic-form">
                      <form method="GET" action="{{ route('services.list') }}">
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    {{-- <label for="" class="text-dark">Vanue Name</label> --}}
                                    <input type="search" name="search" class="form-control input-rounded" placeholder="Search Service">
                                    {{-- <select type="search" name="vanue_id" class="form-control input-rounded">
                                        <option value="">Select One</option>
                                        @foreach ($vanues as $item)
                                        <option value="{{ $item->id }}">{{ $item->vanue_name }}</option>
                                        @endforeach
                                    </select> --}}
                                    {{-- @error('vanue_id')
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                     </span>
                                    @enderror --}}
                                 </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-secondary">Search</button>
                                </div>
                            </div>
                        </div>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection

