@extends('layouts.admin')

@section('content')
<h2>Agregar Pelicula</h2>
<br>


{!!Form::open(['route'=>'film.store', 'method'=>'POST'])!!}
	
	@include('forms.filmForm')

	<div class="form-group col-md-2">
    {!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	</div>

	<div class="form-group col-md-2">
	<a href="{{ route('film.index')}}" class="btn btn-warning">Cancelar</a>
	</div>
		
{!!Form::close()!!}

@stop