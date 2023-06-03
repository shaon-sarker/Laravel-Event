@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Event Organaizer Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{ route('eventorganaizer.store') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="" class="text-dark">Name</label>
                                    <input type="text" class="form-control input-rounded" name="name" placeholder="Name" required autofocus autocomplete="name">
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-dark">Email</label>
                                    <input type="email" class="form-control input-rounded" name="email" placeholder="Email" required autocomplete="username">
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-dark">Password</label>
                                    <input type="password" class="form-control input-rounded" name="password" placeholder="Password" equired autocomplete="new-password">
                                </div>
                                <div class="form-group">
                                    {{-- <label for="" class="text-dark">Role</label> --}}
                                    <input type="hidden" class="form-control input-rounded" name="role" placeholder="" value="event_org">
                                </div>
                                <button type="submit" class="btn btn-dark">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection