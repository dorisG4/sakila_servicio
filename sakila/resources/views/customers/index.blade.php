@extends('layouts.admin')

@section('content')
<h2>Clientes</h2>

			<div class="form-group">
		     <a href="{{ route('customers.create')}}" class="btn btn-info">Registrar nuevo Cliente</a>
		    </div><hr>
		    
<table class="table table-striped">
	<thead>

		<th>Nombre</th>
		<th>Apellido</th>
		<th>E-mail</th>
		<th>Activo</th>
		<th>Telefono</th>
		<th>Ciudad</th>
		<th>Sucursal</th>
	
		<th>Acción<th>
	</thead>
	<tbody>
		@foreach($customers as $customer)
		<tr>
			
			<td>{{$customer->first_name}}</td>
			<td>{{$customer->last_name}}</td>
			<td>{{$customer->email}}</td>
			<td>{{$customer->active}}</td>
			<td>{{$customer->address->phone}}</td>
			<td>{{$customer->address->city->city}}</td>
			<td>{{$customer->store_id}}</td>
		
			<td>
				<a href="{{route('customers.edit',$customer->id) }}" class="btn btn-success" title="Actualizar"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

				<a href="{{route('customers.destroy',$customer->id)}}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" title="Eliminar" ><span class="glyphicon glyphicon-remove"></span></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{!!$customers->render()!!}
@stop
