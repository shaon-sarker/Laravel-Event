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
                                    <input type="search" name="search" class="form-control input-rounded" placeholder="Search Service">
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
		<div class="row">
			@foreach ($service_list as $item)
				<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
					<div class="card shadow-lg p-3 mb-5 bg-body rounded" style="width: 18rem;">
						<div class="card-body text-center">
						  <h2>{{ $item->service_type }}</h2>
						  <h1>Tk {{ $item->service_price }}</h1>
						</div>
						<ul class="list-group list-group-flush text-center text-dark">
						  <li class="list-group-item">{{ App\Models\Vanue::find($item->vanue_id)->vanue_name }} Restaurent</li>
						  <li class="list-group-item">{!! $item->service_list_name !!}</li>
						</ul>
						<div class="card-body text-center">
						  <a href="#" class="card-link btn btn-primary">Buy Now</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>
@endsection



