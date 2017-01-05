@extends('layouts.admin')

@section('content')
<h2>Actualizar Gerente</h2>
<br>

{!!Form::model($manager,['route'=>['manager.update', $manager->id], 'method'=>'PUT'])!!}
	
	<div class="form-group col-md-4">

		{!!Form::label('Sucursal:')!!}
		{!! Form::select('store_id',$stores, null, ['class'=>'form-control select-options','placeholder'=>'Selecciona una sucursal', 'required']) !!}
		
		<br><br>
		{!!Form::label('Empleado:')!!}
		{!!Form::select('staff_id', $staffs, null,['class'=>'form-control select-options', 'placeholder'=>'Selecciona un empleado', 'required'])!!}
		<br><br><br>
	
		    {!!Form::submit('Actualizar',['class'=>'btn btn-success'])!!}
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







