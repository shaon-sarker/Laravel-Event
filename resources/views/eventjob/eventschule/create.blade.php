@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
       <div class="row">
          <div class="col-xxl-12">
             <div class="card">
                <div class="card-header">
                   <h4 class="card-title">Event Schule Information</h4>
                </div>
                <div class="card-body">
                   <div class="basic-form">
                      <form method="post" action="{{ route('event.store') }}">
                        @csrf
                         <div class="form-group">
                            <label for="" class="text-dark">Vanue Name</label>
                            <select name="vanue_id" id="" class="form-control input-rounded @error('vanue_id') is-invalid @enderror">
                                <option value="">Select One</option>
                                @foreach ($vanue_name as $vanue)
                                <option value="{{ $vanue->id }}">{{ $vanue->vanue_name }}</option>
                                @endforeach
                            </select>
                           @error('vanue_id')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Service Price</label>
                            <select name="service_id" id="" class="form-control input-rounded @error('service_id') is-invalid @enderror">
                                <option value="">Select One</option>
                                @foreach ($service_name as $service)
                                <option value="{{ $service->id }}">{{ $service->service_price }}</option>
                                @endforeach
                            </select>
                           @error('service_id')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Event Schulde Time</label>
                            <input type="time" class="form-control input-rounded @error('event_schedule_time') is-invalid @enderror" name="event_schedule_time">
                            @error('event_schedule_time')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Event Schulde Start Date</label>
                            <input type="date" class="form-control input-rounded @error('start_date') is-invalid @enderror" name="start_date">
                            @error('start_date')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Event Schulde End Date</label>
                            <input type="date" class="form-control input-rounded @error('end_date') is-invalid @enderror" name="end_date">
                            @error('end_date')
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