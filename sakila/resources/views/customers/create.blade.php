@extends('layouts.admin')

@section('content')

<h2>Cliente</h2>
<br>
<div class="form-group col-md-4">

{!!Form::open(['route'=>'customers.store', 'method'=>'POST'])!!}
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
		{!!Form::text('address', null,['class'=>'form-control'])!!}
	
		{!!Form::label ('Dirección 2:' )!!}
		{!!Form::text('address2', null,['class'=>'form-control'])!!}	

		{!!Form::label ('Distrito:' )!!}
	    {!!Form::text('district', null,['class'=>'form-control'])!!}

	    {!!Form::label ('Codigo Postal:' )!!}
		{!!Form::text('postal_code', null,['class'=>'form-control'])!!}

		{!!Form::label ('Telefono:' )!!}
		{!!Form::text('phone', null,['class'=>'form-control'])!!}
				
	</div>

	<div class="form-group col-md-4">

		<div class="form-group">

		{!!Form::label ('Ciudad:' )!!}
		{!!Form::text('city', null,['class'=>'form-control','placeholder'=>'Ingresa la ciudad'])!!}

	    {!! Form::label('country_id','Pais:')!!}
		{!! Form::select('country_id',$countries, null, ['class'=>'form-control select-options','placeholder'=>'Selecciona un pais']) !!}


		</div>

			{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
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
