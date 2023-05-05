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
                    <h4 class="card-title">Services List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display text-dark" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Vanue Name</th>
                                    <th>Service List Name</th>
                                    <th>Service Price</th>
                                    <th>Service Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($services_list as $services)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ App\Models\Vanue::find($services->vanue_id)->vanue_name }}</td>
                                    <td>
                                        <ol>
                                            <li>
                                                {!! $services->service_list_name !!}
                                            </li>
                                        </ol>
                                    </td>
                                    <td>{{ $services->service_price }}</td>
                                    <td>
                                    @if ($services->service_type == 'Basic')
                                    <span class="badge badge-pill badge-secondary">Basic</span>
                                    @elseif ($services->service_type == 'Premium')
                                    <span class="badge badge-pill badge-secondary">Premium</span>
                                    @else
                                    <span class="badge badge-pill badge-secondary">Standard</span>
                                    @endif
                                    </td>
                                    
                                    <td>
                                        <a href="{{ route('service.edit',$services->id) }}" class="btn btn-sm btn-dark"><i class="fa fa-pencil">Edit</i></a>
                                        <form action="{{ route('service.destroy',$services->id) }}" method="POST">
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
                                    <th>Vanue Name</th>
                                    <th>Address</th>
                                    <th>Vanue Type</th>
                                    <th>Location</th>
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