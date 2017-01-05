@extends('layouts.admin')
@section('content')

<h2>Actualizar Empleado</h2>
<br>
<div class="form-group col-md-4">

{!!Form::model($staff,['route'=>['staff.update', $staff->id], 'method'=>'PUT', 'file'=>true])!!}

	<div class="form-group">
		{!!Form::label ('Nombre:' )!!}
		{!!Form::text('first_name', $staff->first_name,['class'=>'form-control'])!!}

		{!!Form::label ('Apellido:' )!!}
		{!!Form::text('last_name', $staff->last_name,['class'=>'form-control'])!!}

		{{-- {!!Form::label('picture','Foto:')!!}
		{!!Form::file('picture')!!} 
		{!!Form::label ($staff->picture )!!}	--}}
		<br>

		{!!Form::label ('Email:' )!!}
		{!!Form::text('email', $staff->email,['class'=>'form-control'])!!}

		{!! Form::label('store_id','Sucursal:')!!}
		{!! Form::select('store_id',$stores, $staff->store_id,['class'=>'form-control select-options','placeholder'=>'Selecciona una sucursal']) !!}

		{!!Form::label('active','Activo:')!!}
		{!!Form::select ('active',['SI'=>'SI','NO'=>'NO'], $staff->active,['class'=>'form-control select-options','placeholder'=>'Selecciona una opción'])!!}

		{!!Form::label ('Usuario:' )!!}
		{!!Form::text('username', $staff->username,['class'=>'form-control'])!!}

		{!!Form::label ('Cambiar Password:' )!!}
		{!!Form::password('password',['class'=>'form-control'])!!}

	</div>
	
</div>
<div class="form-group col-md-1"></div>
		
<div class="form-group col-md-4">
		{!!Form::label ('Dirección:' )!!}
		{!!Form::text('address', $staff->address->address,['class'=>'form-control'])!!}
	
		{!!Form::label ('Dirección 2:' )!!}
		{!!Form::text('address2', $staff->address->address2,['class'=>'form-control'])!!}	

		{!!Form::label ('Distrito:' )!!}
	    {!!Form::text('district', $staff->address->district,['class'=>'form-control'])!!}

		{!!Form::label ('Codigo Postal:' )!!}
		{!!Form::text('postal_code', $staff->address->postal_code,['class'=>'form-control'])!!}

		{!!Form::label ('Telefono:' )!!}
		{!!Form::text('phone', $staff->address->phone,['class'=>'form-control'])!!}

		{!!Form::label ('Ciudad:' )!!}
		{!!Form::text('city', $staff->address->city->city,['class'=>'form-control','placeholder'=>'Ingresa la ciudad'])!!}

		{!! Form::label('country_id','Pais:')!!}
		{!! Form::select('country_id',$countries,$staff->address->city->country_id, ['class'=>'form-control select-options','placeholder'=>'Selecciona un pais', 'required']) !!}

		<br><br>
		     <div class="form-group col-md-6">
		     {!!Form::submit('Actualizar',['class'=>'btn btn-success'])!!}
			 </div>
			
		 	<div class="form-group col-md-6">
			<a href="{{ route('staff.index')}}" class="btn btn-warning">Cancelar</a>
			</div>
</div>
  
{!!Form::close()!!}

@stop

@section('js')
	<script>

		$('.select-options').chosen({
				placeholder_text_single: 'Seleccione una opción...'
		});

	</script>
@endsection