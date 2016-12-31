@extends('layouts.admin')

@section('content')
<h2>Invetario de Peliculas</h2>

<!--Buscador de Pelicula -->
		{!! Form::open(['route' => 'inventory.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
		    <div class="form-group">
		     {!! Form::text('id', null, ['class'=>'form-control', 'placeholder'=>'Titulo...']) !!}
		    </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        {!! Form::close() !!}
<!--Fin Buscador -->

<hr>
<table class="table table-striped">
	<thead>

		<th>ID</th>
		<th>Titulo</th>
		<th>Descripcion</th>
		<th>Sucursal</th>
		
	</thead>
	<tbody>
		@foreach($inventories as $inventory)
		<tr>
			<td>{{$inventory->id}}</td>
			<td>{{$inventory->filmText->title}}</td>
			<td>{{$inventory->filmText->description}}</td>
			<td>{{$inventory->store_id}}</td>
			{{-- <td>{{$inventory->email}}</td>
			<td>{{$inventory->active}}</td>
			<td>{{$inventory->address->phone}}</td>
			<td>{{$inventory->address->city->city}}</td>
			<td>{{$inventory->store_id}}</td> --}}
		
		{{-- 	<td>
				<a href="{{route('inventories.edit',$inventory->id) }}" class="btn btn-success" title="Actualizar"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

				<a href="{{route('inventories.destroy',$inventory->id)}}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" title="Eliminar" ><span class="glyphicon glyphicon-remove"></span></a>
			</td> --}}
		</tr>
		@endforeach
	</tbody>
</table>

{!!$inventories->render()!!}
@stop
