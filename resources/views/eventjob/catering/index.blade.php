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
                    <h4 class="card-title">Catering Manage</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display text-dark" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Catering Name</th>
                                    <th>Phone No</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($catering_info as $catering)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $catering->catering_name }}</td>
                                    <td>{{ $catering->phone_no }}</td>
                                    <td>{{ $catering->address }}</td>
                                    <td><span class="badge badge-pill badge-secondary">{{ $catering->status }}</span></td>
                                    <td>
                                        <a href="{{ route('catering.edit',$catering->id) }}" class="btn btn-sm btn-dark"><i class="fa fa-pencil">Edit</i></a>
                                        <form action="{{ route('catering.destroy',$catering->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete<i class="fa fa-close"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    
                                @endforelse
                            
                              
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl</th>
                                    <th>Catering Name</th>
                                    <th>Phone No</th>
                                    <th>Address</th>
                                    <th>Status</th>
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