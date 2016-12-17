@extends('layouts.admin')

@section('content')
<h2>Peliculas</h2>

<!--Buscador de Pelicula -->
		{!! Form::open(['route' => 'film.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
		    <div class="form-group">
		     {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Titulo...']) !!}
		    </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        {!! Form::close() !!}
<!--Fin Buscador -->

			<div class="form-group">
		     <a href="{{ route('film.create')}}" class="btn btn-info">Registrar nueva Pelicula</a>
		    </div><hr>
<table class="table table-striped">
	<thead>
		<th>Titulo </th>
		<th>Descripcion</th>
		<th>Año</th>
		<th>Doblaje</th>
		<th>Idioma Original</th>
		<th>Clasificación</th>
		
		<th>Acción<th>
	</thead>
	<tbody>

		@foreach($films as $film)
		<tr>
			<td>{{$film->title}}</td>
			<td>{{$film->description}}</td>
			<td>{{$film->release_year}}</td>
			<td>{{$film->language->name}}</td>
			<td>{{$film->originalLanguage->name}}</td>
			<td>{{$film->rating}}</td>			

			<td>
				<a href="{{route('film.edit',$film->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

				<a href="#" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
			</td>
			
		</tr>
		@endforeach
	</tbody>
</table>

{!!$films->render()!!}
@stop
