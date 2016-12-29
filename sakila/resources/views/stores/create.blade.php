@extends('layouts.admin')

@section('content')

<h2>Sucursal</h2>
<br>
<div class="form-group col-md-4">

{!!Form::open(['route'=>'stores.store', 'method'=>'POST'])!!}
	<div class="form-group"> 
    	{!! Form::label('country_id','Pais:')!!}
		{!! Form::select('country_id',$countries, null, ['class'=>'form-control select-options','placeholder'=>'Selecciona un pais']) !!}

		{!!Form::label ('Ciudad:' )!!}
		{!!Form::text('city', null,['class'=>'form-control','placeholder'=>'Ingresa la ciudad'])!!}

		{!!Form::label ('Dirección:' )!!}
		{!!Form::text('address', null,['class'=>'form-control'])!!}
	
		{!!Form::label ('Dirección 2:' )!!}
		{!!Form::text('address2', null,['class'=>'form-control'])!!}		
		<br>
	</div>
	
</div>
			<div class="form-group col-md-2"></div>
			<div class="form-group col-md-4">

				<div class="form-group">
				{!!Form::label ('Distrito:' )!!}
			    {!!Form::text('district', null,['class'=>'form-control'])!!}

			    {!!Form::label ('Codigo Postal:' )!!}
			    {!!Form::text('postal_code', null,['class'=>'form-control'])!!}

			    {!!Form::label ('Telefono:' )!!}
			    {!!Form::text('phone', null,['class'=>'form-control'])!!}
				</div>

			{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
			<a href="{{ route('stores.index')}}" class="btn btn-warning">Cancelar</a>

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