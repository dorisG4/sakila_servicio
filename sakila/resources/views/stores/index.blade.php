@extends('layouts.admin')

@section('content')
<h2>Sucursales</h2>


			<div class="form-group">
		     <a href="{{ route('stores.create')}}" class="btn btn-info">Registrar nueva Sucursal</a>

		    </div><hr>
<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Direccion</th>
		<th>Telefono</th>
		<th>Ciudad</th>
		<th>Pais</th>
	
		<th>Acción<th>
	</thead>
	<tbody>
		@foreach($stores as $store)
		<tr>
			<td>{{$store->id}}</td>
			<td>{{$store->address->address}}</td>
			<td>{{$store->address->phone}}</td>
			<td>{{$store->address->city->city}}</td>
			<td>{{$store->address->city->country->country}}</td>
		

			<td>
				<a href="{{route('stores.edit',$store->id) }}" class="btn btn-success" title="Actualizar"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

				<a href="{{route('stores.destroy',$store->id)}}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" title="Eliminar" ><span class="glyphicon glyphicon-remove"></span></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{!!$stores->render()!!}
@stop
