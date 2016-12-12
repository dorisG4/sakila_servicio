@extends('layouts.admin')
@section('content')

<h2>Actualizar Idioma</h2>
<br>

{!!Form::model($language,['route'=>['language.update', $language->id], 'method'=>'PUT'])!!}
	@include('forms.languageForm')

	<div class="form-group col-md-2">
	{!!Form::submit('Actualizar',['class'=>'btn btn-success'])!!}
	</div>

	<div class="form-group col-md-2">
	<a href="{{ route('language.index')}}" class="btn btn-warning">Cancelar</a>
	</div>

{!!Form::close()!!}
<br>		

@stop 