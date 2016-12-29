@extends('layouts.admin')

@section('content')

<h2>Agregar Pelicula</h2>
<br>


{!!Form::open(['route'=>'film.store', 'method'=>'POST'])!!}
	
<div class="row">
	<div class="form-group col-md-4">
		{!!Form::label('title','Titulo:')!!}
		{!!Form::text('title', null,['class'=>'form-control'])!!}

		{!!Form::label('description','Descripción:')!!}
		{!!Form::textarea('description', null,['class'=>'form-control', 'rows'=>'3'])!!}
		
		{!!Form::label('release_year','Año de lanzamiento:')!!}		
		{!!Form::selectRange('release_year',1980,2050, null,['class'=>'form-control select-options','placeholder'=>'Selecciona un año'])!!}
		
		{!! Form::label('language_id','Idioma:')!!}
		{!! Form::select('language_id',$languages, null, ['class'=>'form-control select-options','placeholder'=>'Selecciona un idioma']) !!}

		{!! Form::label('original_language_id','Idioma original:')!!}
		{!! Form::select('original_language_id',$languages, null, ['class'=>'form-control select-options','placeholder'=>'Selecciona un idioma']) !!}

		{!!Form::label('rental_duration','Duración del alquiler:')!!}
		{!!Form::text('rental_duration', null,['class'=>'form-control'])!!}					
	</div>

	<div class="form-group col-md-4">	

	    {!!Form::label('rental_rate','Tarifa del alquiler:')!!}
	  	{!!Form::text('rental_rate', null,['class'=>'form-control'])!!}	

		{!!Form::label('length','Duración de la pelicula:')!!}
		{!!Form::text('length', null,['class'=>'form-control'])!!}
	   
		{!!Form::label('replacement_cost','Costo de reposición:')!!}
		{!!Form::text('replacement_cost', null,['class'=>'form-control'])!!}

		{!!Form::label('rating','Clasificación:')!!}
		{!!Form::select ('rating',['G'=>'G','PG'=>'PG','PG-13'=>'PG-13','R'=>'R','NC-17'=>'NC-17'], null,['class'=>'form-control select-options','placeholder'=>'Selecciona una clasificación'])!!}

		{!!Form::label('special_features','Características especiales:')!!}
		{!!Form::select ('special_features',['Trailers'=>'Trailers','Comentarios'=>'Comentarios','Escenas eliminadas'=>'Escenas eliminadas','Detrás de escenas'=>'Detrás de escenas'], null,['class'=>'form-control select-options','placeholder'=>'Selecciona una característica'])!!}

		{!! Form::label('actor_id','Actor:')!!}
		{!! Form::select('actor_id[]',$actors, null, ['class'=>'form-control select-actor','multiple']) !!}
	</div>
	
	<div class="form-group col-md-4">	

	 	{!! Form::label('category_id','Categoria:')!!}
		{!! Form::select('category_id[]',$categories, null, ['class'=>'form-control select-category','multiple']) !!}

		{!! Form::label('store_id','Sucursal:')!!}
		{!! Form::select('store_id',$stores, null, ['class'=>'form-control select-options','placeholder'=>'Selecciona una sucursal']) !!}



		<h3>Texto de la Pelicula</h3><hr>
		{!!Form::label('title2','Titulo 2:')!!}
		{!!Form::text('title2', null, ['class'=>'form-control'])!!}

		{!!Form::label('description2','Descripcion 2:')!!}
		{!!Form::textarea('description2', null,['class'=>'form-control', 'rows'=>'3'])!!}
	</div>

</div>
	
	<div class="form-group col-md-2">
    {!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	</div>
	
	<div class="form-group col-md-2">
	<a href="{{ route('film.index')}}" class="btn btn-warning">Cancelar</a>
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

          

