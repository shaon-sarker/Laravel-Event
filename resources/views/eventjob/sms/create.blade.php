@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">SMS</h2>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="text-dark">Phone No</label>
                                    <input type="number" class="form-control input-rounded" name="phoneno" placeholder="Phone No">
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-dark">Message</label>
                                    <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-dark">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection