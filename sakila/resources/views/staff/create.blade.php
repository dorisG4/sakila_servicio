@extends('layouts.admin')
@section('content')

<h2>Empleado</h2>
<br>
<div class="form-group col-md-4">

{!!Form::open(['route'=>'staff.store', 'method'=>'POST'])!!}
	<div class="form-group">
		{!!Form::label ('Nombre:' )!!}
		{!!Form::text('first_name', null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre'])!!}
		<br>	

		{!!Form::label ('Apellido:' )!!}
		{!!Form::text('last_name', null,['class'=>'form-control','placeholder'=>'Ingresa el Apellido'])!!}
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
	
</div>
<div class="form-group col-md-2">
		

</div>
		
<div class="form-group col-md-4">
		{!!Form::label ('Dirección 1:' )!!}
		{!!Form::text('last_name', null,['class'=>'form-control','placeholder'=>'Ingresa el Apellido'])!!}
		<br>

		{!!Form::label ('Dirección 2:' )!!}
		{!!Form::text('address_id', null,['class'=>'form-control'])!!}
		<br>

		{!!Form::label ('Distrito:' )!!}
		{!!Form::text('address_id', null,['class'=>'form-control'])!!}
		<br>

		{!!Form::label ('Ciudad:' )!!}
		{!!Form::text('address_id', null,['class'=>'form-control'])!!}
		<br>

		{!!Form::label ('Codigo Postal:' )!!}
		{!!Form::text('address_id', null,['class'=>'form-control'])!!}
		<br>

		{!!Form::label ('Telefono:' )!!}
		{!!Form::text('address_id', null,['class'=>'form-control'])!!}
		<br>


 {!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
</div>

   
{!!Form::close()!!}


@stop