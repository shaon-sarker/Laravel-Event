@extends('layouts.backend.app')
@section('content')
@push('admin.css')
<link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endpush
<div class="content-body">
    <div class="container-fluid">
       <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Job Post Manage</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display text-dark" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>User Name</th>
                                    <th>Job Title</th>
                                    <th>Description</th>
                                    <th>Salary Range</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($job_list as $data)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ App\Models\User::find($data->user_id)->name }}</td>
                                    <td>{{ $data->job_title }}</td>
                                    <td>{{ $data->job_description }}</td>
                                    <td>{{ $data->salary_range }}</td>
                                    <td>{{ $data->created_at->format('d/m/y h:i:s') }}</td>
                                    <td>
                                        <a href="{{ route('jobportal.edit',$data->id) }}" class="btn btn-sm btn-dark"><i class="fa fa-pencil">Edit</i></a>
                                        <form action="{{ route('jobportal.destroy',$data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete<i class="fa fa-close"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl</th>
                                    <th>User Name</th>
                                    <th>Job Title</th>
                                    <th>Description</th>
                                    <th>Salary Range</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>
 </div>
@endsection
@push('admin.js')
<script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins-init/datatables.init.js') }}"></script>
@endpush