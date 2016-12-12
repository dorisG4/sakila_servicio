@extends('layouts.admin')
@section('content')

<h2>Actualizar Actor</h2>
<br>

{!!Form::model($actor,['route'=>['actor.update', $actor->id], 'method'=>'PUT'])!!}
	@include('forms.actorForm')

	<div class="form-group col-md-2">
	{!!Form::submit('Actualizar',['class'=>'btn btn-success'])!!}
	</div>

	<div class="form-group col-md-2">
	<a href="{{ route('actor.index')}}" class="btn btn-warning">Cancelar</a>
	</div>

{!!Form::close()!!}
<br>		

@stop 