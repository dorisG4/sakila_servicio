@extends('layouts.admin')

@section('content')
<h2>Gerentes</h2>

<!--Buscador de gerente -->
		{{-- {!! Form::open(['route' => 'manager.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
		    <div class="form-group">
		     {!! Form::text('store_id', null, ['class'=>'form-control', 'placeholder'=>'manager...'])!!}
		    </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        {!! Form::close() !!} --}}
<!--Fin Buscador --> 
<div class="form-group">
<a href="{{ route('manager.create')}}" class="btn btn-info">Registrar nuevo Gerente</a>
</div>


<table class="table">
    <thead>
	    <th></th>
		<th></th>
		<th></th>	
		
	</thead>
	<thead>
		<th>ID</th>
		<th>Sucursal</th>
		<th>Nombre</th>
	    <th>Telefono</th>
		<th>E-mail</th>

	</thead>
	@foreach($managers as $manager)
	<thead>
		<td>{{$manager->id}}</td>
		<td>{{$manager->store_id}}</td>
		<td>{{$manager->staff->first_name}}  {{$manager->staff->last_name}}</td>
		<td>{{$manager->staff->address->phone}}</td>
		<td>{{$manager->staff->email}}</td>
		<td>
		{!!Link_to_route('manager.edit', $title = 'Actualizar', $parameters=$manager->id, $attributes=['class'=>'btn btn-success'])!!}
		</td>
		<td>
		{!!Form::open(['route'=>['manager.destroy', $manager->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger','onclick'=>'return confirm("Seguro que desea eliminar?")' ])!!}
		{!!Form::close()!!} 






		</td>		
		
	</thead>
	@endforeach
</table>
{!! $managers->render() !!}

@stop