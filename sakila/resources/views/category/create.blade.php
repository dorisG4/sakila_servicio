@extends('layouts.admin')
@section('content')
<h2>Categoria</h2>
<br>

{!!Form::open(['route'=>'category.store', 'method'=>'POST'])!!}
	<div class="form-group">
		{!!Form::label('Nombre:')!!}
		{!!Form::text('name', null,['class'=>'form-control','placeholder'=>'Ingresa la Categoria'])!!}
	</div>
	{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	{!!Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
	{!!Form::submit('Eliminar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}

@stop