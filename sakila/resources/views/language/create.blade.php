@extends('layouts.admin')

@section('content')
<h2>Agregar Idioma</h2>
<br>


{!!Form::open(['route'=>'language.store', 'method'=>'POST'])!!}
	
	@include('forms.languageForm')

	<div class="form-group col-md-2">
    {!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	</div>

	<div class="form-group col-md-2">
	<a href="{{ route('language.index')}}" class="btn btn-warning">Cancelar</a>
	</div>
		
{!!Form::close()!!}

@stop