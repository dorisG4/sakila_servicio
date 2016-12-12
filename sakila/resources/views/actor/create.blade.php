@extends('layouts.admin')

@section('content')
<h2>Agregar Actor</h2>
<br>

{!!Form::open(['route'=>'actor.store', 'method'=>'POST'])!!}
	
	@include('forms.actorForm')
	
	<div class="form-group col-md-2">
    {!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	</div>

	<div class="form-group col-md-2">
	<a href="{{ route('actor.index')}}" class="btn btn-warning">Cancelar</a>
	</div>	
{!!Form::close()!!}

@stop