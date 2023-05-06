@extends('layouts.backend.app')
@section('content')
@push('admin.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

<div class="content-body">
    <div class="container-fluid">
       <div class="row">
          <div class="col-xxl-12">
             <div class="card">
                <div class="card-header">
                   <h4 class="card-title">Job Post</h4>
                </div>
                <div class="card-body">
                   <div class="basic-form">
                      <form method="post" action="{{ route('jobportal.update',$job_portal->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                         <div class="form-group">
                            <label for="" class="text-dark">Job Title</label>
                            <input type="text" name="job_title" class="form-control input-rounded @error('job_title') is-invalid @enderror" placeholder="Job Title" value="{{ $job_portal->job_title }}">
                           @error('job_title')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Salary Range</label>
                            <input type="number" class="form-control input-rounded @error('salary_range') is-invalid @enderror" name="salary_range" placeholder="Salary Range" value="{{ $job_portal->salary_range }}">
                            @error('salary_range')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Job Description</label>
                            <textarea name="job_description" id="" cols="30" rows="10" class="form-control @error('job_description') is-invalid @enderror" placeholder="Job Description">{{ $job_portal->job_description }}</textarea>
                            @error('job_description')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group">
                           <label class="form-label text-dark">Image</label>
                           <input type="file" class="form-control dropify" data-default-file="{{ asset('uploads/jobpost') }}/{{ $job_portal->image }}" name="image">
                         </div>
                         <button type="submit" class="btn btn-success">Update</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.dropify').dropify({
        messages: {
            'default': 'Upload Image',
        }
    });
</script>
@endpush