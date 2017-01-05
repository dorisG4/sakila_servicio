@extends('layouts.admin')

@section('content')
<h2>Agregar Gerente</h2>
<br>

{!!Form::open(['route'=>'manager.store', 'method'=>'POST'])!!}
	
	<div class="form-group col-md-4">

		{!!Form::label('Sucursal:')!!}
		{!! Form::select('store_id',$stores, null, ['class'=>'form-control select-options','placeholder'=>'Selecciona una sucursal', 'required']) !!}
		
		<br><br>
		{!!Form::label('Empleado:')!!}
		{!!Form::select('staff_id', $staffs, null,['class'=>'form-control select-options', 'placeholder'=>'Selecciona un empleado', 'required'])!!}
		<br><br><br>
	
		    {!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	    &nbsp; &nbsp; &nbsp; &nbsp; 
			<a href="{{ route('manager.index')}}" class="btn btn-warning">Cancelar</a>
		 
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







