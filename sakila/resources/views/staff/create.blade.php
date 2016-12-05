@extends('layouts.admin')
@section('content')

<h2>Empleado</h2>
<br>

{!!Form::open(['route'=>'staff.store', 'method'=>'POST'])!!}
	<div class="form-group">
		{!!Form::label ('Nombre:' )!!}
		{!!Form::text('first_name', null,['class'=>'form-control','placeholder'=>'Ingresa la Nombre'])!!}
		<br>

		{!!Form::label ('Apellido:' )!!}
		{!!Form::text('last_name', null,['class'=>'form-control','placeholder'=>'Ingresa la Apellido'])!!}
		<br>

		{!!Form::label ('Dirección:' )!!}
		{!!Form::text('address_id', null,['class'=>'form-control'])!!}
		<br>

		{!!Form::label ('Foto:' )!!}
		{!!Form::text('picture', null,['class'=>'form-control'])!!}
		<br>

		{!!Form::label ('Email:' )!!}
		{!!Form::text('email', null,['class'=>'form-control', 'placeholder'=>'Ingresa el Email'])!!}
		<br>

		{!!Form::label ('Sucursal:' )!!}
		{!!Form::text('store_id', null,['class'=>'form-control'])!!}
		<br>

		{!!Form::label ('Activo:' )!!}
		{!!Form::text('active', null,['class'=>'form-control'])!!}
		<br>

		{!!Form::label ('Usuario:' )!!}
		{!!Form::text('username', null,['class'=>'form-control'])!!}
		<br>

		{!!Form::label ('Password:' )!!}
		{!!Form::password('password', ['class'=>'form-control'])!!}



	</div>
	{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	{!!Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
	{!!Form::submit('Eliminar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}


@stop