@extends('layouts.backend.app')
@section('content')
@push('admin.css')
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('backend/css/pricetable.css') }}">
@endpush

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
                {{-- @foreach ($service_list as $item)
                <h1>{{ $item->vanue_id }}</h1>
                <h2>{{ $item->service_type }}</h2>
                @endforeach --}}
             </div>
          </div>
          
       </div>
<!-- partial:index.partial.html -->
<!-- Contenedor -->
	<div class="pricing-wrapper clearfix">
		<!-- Titulo -->
		<!-- <h1 class="pricing-table-title">Tabla de Precios <a href="http://creaticode.com">Creaticode.com</a></h1> -->

        @foreach ($service_list as $item)
        <div class="pricing-table">
			<h3 class="pricing-title">{{ $item->service_type }}</h3>
			<div class="price">TK {{ $item->service_price }}</div>
			<!-- Lista de Caracteristicas / Propiedades -->
			<ul class="table-list">
				<li>{{ App\Models\Vanue::find($item->vanue_id)->vanue_name }}  Restaurent Name</li>
				<li><span>{!! $item->service_list_name !!}</span></li>
				{{-- <li>25 GB <span>De transferencia mensual</span></li>
				<li>Base de datos <span class="unlimited">ilimitadas</span></li>
				<li>Cuentas de correo <span class="unlimited">ilimitadas</span></li>
				<li>CPanel <span>incluido</span></li> --}}
			</ul>
			<!-- Contratar / Comprar -->
			<div class="table-buy">
				<!-- <p>$60<sup>/ mes</sup></p> -->
				<a href="#" class="pricing-action">Buy Now</a>
			</div>
		</div>
        @endforeach
		
		
		{{-- <div class="pricing-table recommended">
			<h3 class="pricing-title">Standard</h3>
			<div class="price">TK100</div>
			<!-- Lista de Caracteristicas / Propiedades -->
			<ul class="table-list">
				<li>35 GB <span>De almacenamiento</span></li>
				<li>5 Dominios <span>incluidos</span></li>
				<li>100 GB <span>De transferencia mensual</span></li>
				<li>Base de datos <span class="unlimited">ilimitadas</span></li>
				<li>Cuentas de correo <span class="unlimited">ilimitadas</span></li>
				<li>CPanel <span>incluido</span></li>
			</ul>
			<!-- Contratar / Comprar -->
			<div class="table-buy">
				<!-- <p>$100<sup>/ mes</sup></p> -->
				<a href="#" class="pricing-action">Buy Now</a>
			</div>
		</div>

		<div class="pricing-table">
			<h3 class="pricing-title">Premium</h3>
			<div class="price">Tk200</div>
			<!-- Lista de Caracteristicas / Propiedades -->
			<ul class="table-list">
				<li>100 GB <span>De almacenamiento</span></li>
				<li>8 Dominios <span>incluidos</span></li>
				<li>200 GB <span>De transferencia mensual</span></li>
				<li>Base de datos <span class="unlimited">ilimitadas</span></li>
				<li>Cuentas de correo <span class="unlimited">ilimitadas</span></li>
				<li>CPanel <span>incluido</span></li>
			</ul>
			<!-- Contratar / Comprar -->
			<div class="table-buy">
				<!-- <p>$200<sup>/ mes</sup></p> -->
				<a href="#" class="pricing-action">Buy Now</a>
			</div>
		</div> --}}
	</div>
<!-- partial -->
    </div>
 </div>
@endsection

