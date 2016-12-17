@extends('layouts.admin')

@section('content')
<h2>Idiomas</h2>

<!--Buscador de Idioma-->
		{!! Form::open(['route' => 'language.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
		    <div class="form-group">
		     {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Idioma...']) !!}    
		    </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        {!! Form::close() !!} 
<!--Fin Buscador --> 
			<div class="form-group">
		     <a href="{{ route('language.create')}}" class="btn btn-info">Registrar nueva Idioma</a>
		    </div>

<table class="table"> 
    <thead>
	    <th></th>
		<th></th>
		<th></th>
		
	</thead>
	<thead>
		<th>Nombre</th>
		<th></th>
		<th></th>
	</thead>
	@foreach($languages as $language)

	<thead> 
		<td>{{$language->name}}</td>
		<td>
		{!!Link_to_route('language.edit', $title = 'Editar', $parameters = $language->id, $attributes=['class'=>'btn btn-success'])!!}
		</td>
		<td>
		{!!Form::open(['route'=>['language.destroy', $language->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!} 
		</td>		
		
	</thead>
	@endforeach
</table>


{!! $languages->render() !!}

@stop
