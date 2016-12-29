@extends('layouts.admin')

@section('content')

<h2>Actualizar Sucursal</h2>
<br>
<div class="form-group col-md-4">

{!!Form::model($store,['route'=>['stores.update', $store->id], 'method'=>'PUT'])!!}


	<div class="form-group"> 
    	{!! Form::label('country_id','Pais:')!!}
		{!! Form::select('country_id',$countries,$store->address->city->country_id,['class'=>'form-control select-options','placeholder'=>'Selecciona un pais']) !!}

		{!!Form::label ('Ciudad:' )!!}
		{!!Form::text('city',$store->address->city->city,['class'=>'form-control'])!!}

		{!!Form::label ('Dirección:' )!!}
		{!!Form::text('address', $store->address->address,['class'=>'form-control'])!!}
	
		{!!Form::label ('Dirección 2:' )!!}
		{!!Form::text('address2', $store->address->address2,['class'=>'form-control'])!!}		
		<br>
	</div>
	
</div>
			<div class="form-group col-md-2">
			</div>
			<div class="form-group col-md-4">

				<div class="form-group">
				{!!Form::label ('Distrito:' )!!}
			    {!!Form::text('district', $store->address->district,['class'=>'form-control'])!!}

			    {!!Form::label ('Codigo Postal:' )!!}
			    {!!Form::text('postal_code', $store->address->postal_code,['class'=>'form-control'])!!}

			    {!!Form::label ('Telefono:' )!!}
			    {!!Form::text('phone', $store->address->phone,['class'=>'form-control'])!!}
				</div>

			{!!Form::submit('Actualizar',['class'=>'btn btn-success'])!!}
			<a href="{{ route('stores.index')}}" class="btn btn-warning">Cancelar</a>

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