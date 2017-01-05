@extends('layouts.admin')

@section('content')
<h2>Actores</h2>

<!--Buscador de Actor -->
		{!! Form::open(['route' => 'actor.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
		    <div class="form-group">
		     {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Actor...']) !!}
		    </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        {!! Form::close() !!}
<!--Fin Buscador --> 
<div class="form-group">
<a href="{{ route('actor.create')}}" class="btn btn-info">Registrar nuevo actor</a>
</div>


<table class="table">
    <thead>
	    <th></th>
		<th></th>
		<th></th>	
		<th></th>	
	</thead>
	<thead>
		<th>Nombre</th>
		<th>Apellido</th>
		<th></th>
		<th></th>

	</thead>
	@foreach($actors as $actor)
	<thead>
		<td>{{$actor->first_name}}</td>
		<td>{{$actor->last_name}}</td>
		<td>
		{!!Link_to_route('actor.edit', $title = 'Actualizar', $parameters = $actor->id, $attributes=['class'=>'btn btn-success'])!!}
		</td>
		<td>
		{!!Form::open(['route'=>['actor.destroy', $actor->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger','onclick'=>'return confirm("Seguro que desea eliminar?")'])!!}
		{!!Form::close()!!} 
		</td>		
		
	</thead>
	@endforeach
</table>
{!! $actors->render() !!}

@stop