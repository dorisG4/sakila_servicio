@extends('layouts.admin')

@section('content')
<h2>Rentas de Peliculas</h2>

<!--Buscador de rentas -->
	{{-- 	{!! Form::open(['route' => 'actor.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
		    <div class="form-group">
		     {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Actor...']) !!}
		    </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        {!! Form::close() !!} --}}
<!--Fin Buscador --> 
<div class="form-group">
<a href="{{ route('rental.create')}}" class="btn btn-info">Registrar nueva renta</a>
</div>


<table class="table">
    <thead>
	    <th></th>
		<th></th>
		<th></th>	
		<th></th>	
		<th></th>	
	</thead>
	<thead>
		<th>Pelicula</th>
		<th>Cliente</th>
		<th>Fecha de Entrega</th>
		<th>Empleado</th>
		<th>Acción</th>



	</thead>
	@foreach($rentals as $rental)
	<thead>
		<td>{{$rental->inventory->filmText->title}}</td>
		<td>{{$rental->customer->first_name}} {{$rental->customer->last_name}}</td>
		<td>{{$rental->return_date}}</td>
		<td>{{$rental->staff->first_name}}</td>
		<td>
		        <a href="{{route('rental.edit',$rental->id) }}" class="btn btn-success" title="Actualizar">
		        <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
		        </a>

				<a href="{{route('rental.destroy',$rental->id)}}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" title="Eliminar" >
				<span class="glyphicon glyphicon-remove"></span>
				</a>	
		</td>		
		
	</thead>
	@endforeach
</table>
{!! $rentals->render() !!}

@stop