@extends('layouts.admin')

@section('content')
<h2>PAGOS</h2>

<table class="table">
    <thead>
	    <th></th>
		<th></th>
		<th></th>	
		<th></th>	
		<th></th>	
	</thead>
	<thead>
		<th>ID</th>
		<th>Cliente</th>
		<th>Pelicula</th>
		<th>Pago</th>

	</thead>
	@foreach($payments as $payment)
	<thead>
		<td>{{$payment->id}}</td>
		<td>{{$payment->rental->customer->first_name}}</td>
		<td>{{$payment->rental->inventory->filmText->title}}</td>
		<td>{{$payment->amount}}</td>
					
	</thead>
	@endforeach
</table>
{!! $payments->render() !!}

@stop