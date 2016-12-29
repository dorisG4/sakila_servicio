@extends('layouts.admin')

@section('content')

<h2>Actualizar Cliente</h2>
<br>
<div class="form-group col-md-4">

{!!Form::model($customer,['route'=>['customers.update', $customer->id], 'method'=>'PUT'])!!}

	<div class="form-group"> 

        {!! Form::label('store_id','Sucursal:')!!}
		{!! Form::select('store_id',$stores, null,['class'=>'form-control select-options','placeholder'=>'Selecciona una sucursal']) !!}

		{!!Form::label ('Nombre:' )!!}
		{!!Form::text('first_name', null,['class'=>'form-control'])!!}

		{!!Form::label ('Apellido:' )!!}
		{!!Form::text('last_name', null,['class'=>'form-control'])!!}

		{!!Form::label ('Email:' )!!}
		{!!Form::text('email', null,['class'=>'form-control'])!!}

		{!!Form::label('active','Activo:')!!}
		{!!Form::select ('active',['SI'=>'SI','NO'=>'NO'], null,['class'=>'form-control select-options','placeholder'=>'Selecciona una opción'])!!}
			
		<br>
	</div>
	
</div>
	<div class="form-group col-md-4">

		{!!Form::label ('Dirección:' )!!}
		{!!Form::text('address', $customer->address->address,['class'=>'form-control'])!!}
	
		{!!Form::label ('Dirección 2:' )!!}
		{!!Form::text('address2', $customer->address->address2,['class'=>'form-control'])!!}	

		{!!Form::label ('Distrito:' )!!}
	    {!!Form::text('district', $customer->address->district,['class'=>'form-control'])!!}

	    {!!Form::label ('Codigo Postal:' )!!}
		{!!Form::text('postal_code', $customer->address->postal_code,['class'=>'form-control'])!!}

		{!!Form::label ('Telefono:' )!!}
		{!!Form::text('phone', $customer->address->phone,['class'=>'form-control'])!!}
				
	</div>

	<div class="form-group col-md-4">

		<div class="form-group">

		{!!Form::label ('Ciudad:' )!!}
		{!!Form::text('city', $customer->address->city->city,['class'=>'form-control','placeholder'=>'Ingresa la ciudad'])!!}

	    {!! Form::label('country_id','Pais:')!!}
		{!! Form::select('country_id',$countries,$customer->address->city->country_id, ['class'=>'form-control select-options','placeholder'=>'Selecciona un pais']) !!}


		</div>

			{!!Form::submit('Actualizar',['class'=>'btn btn-success'])!!}
			<a href="{{ route('customers.index')}}" class="btn btn-warning">Cancelar</a>

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
