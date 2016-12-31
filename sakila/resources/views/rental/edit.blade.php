@extends('layouts.admin')

@section('content')

<h2>Actualizar renta de Pelicula</h2>
<br>

{!!Form::model($rental,['route'=>['rental.update', $rental->id], 'method'=>'PUT'])!!}


		<div class="form-group col-md-4">
		    <h3>Datos de Renta</h3><hr>

				{!!Form::label('Fecha de alquiler:')!!}
				{!!Form::date('rental_date',null,['class'=>'form-control'])!!}

				{!!Form::label('Pelicula:')!!}
				{!!Form::select('inventory_id',$title,null,['class'=>'form-control select-options', 'placeholder'=>'Selecciona una opción'])!!}

				{{-- {!! Form::select('original_language_id', [1, 2, 3],null, ['class'=>'form-control select-options','placeholder'=>'Selecciona un idioma'])!!} --}}

				{!!Form::label('Cliente:')!!}
				{!!Form::select('customer_id',$customers, null,['class'=>'form-control select-options', 'placeholder'=>'Selecciona una opción'])!!}

				{!!Form::label('Fecha de entrega:')!!}
				{!!Form::date('return_date', null,['class'=>'form-control'])!!}

				{!!Form::label('Empleado:')!!}
				{!!Form::select('staff_id', $staffs, null,['class'=>'form-control select-options', 'placeholder'=>'Selecciona una opción'])!!}
		</div>	
		<div class="form-group col-md-2"></div>

		<div class="form-group col-md-4">
		    <h3>Datos de Pago</h3><hr>

				{!!Form::label('Cantidad:')!!}
				{!!Form::text('amount', $payment->amount,['class'=>'form-control '])!!}

				{!!Form::label('Fecha de pago:')!!}
				{!!Form::date('payment_date',$payment->payment_date,['class'=>'form-control'])!!}
					
					<br>
					<div class="form-group col-md-6">			

	 				{!!Form::submit('Actualizar',['class'=>'btn btn-success'])!!} </div>


	 					<div class="form-group col-md-6">
						<a href="{{ route('rental.index')}}" class="btn btn-warning">Cancelar</a>
						</div>




		</div>	



{!!Form::close()!!}

@stop

@section('js')
	<script>

		$('.select-actor').chosen({
			placeholder_text_multiple: 'Selecciona uno o mas Actores',
			search_contains: true
		});

		$('.select-category').chosen({
			placeholder_text_multiple: 'Selecciona una o mas Categorias',
			search_contains: true
		});

		$('.select-options').chosen({
				placeholder_text_single: 'Seleccione una opción...'
		});

	</script>
@endsection