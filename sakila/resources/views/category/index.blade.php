@extends('layouts.admin')

@section('content')
<h2>Categorias</h2>

<!--Buscador de Categoria -->
		{!! Form::open(['route' => 'category.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
		    <div class="form-group">
		     {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Categoria...']) !!}    
		    </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        {!! Form::close() !!} 
<!--Fin Buscador --> 
			<div class="form-group">
		     <a href="{{ route('category.create')}}" class="btn btn-info">Registrar nueva categoria</a>
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
	@foreach($categories as $category)

	<thead> 
		<td>{{$category->name}}</td>
		<td>
		{!!Link_to_route('category.edit', $title = 'Editar', $parameters = $category->id, $attributes=['class'=>'btn btn-success'])!!}
		</td>
		<td>
		{!!Form::open(['route'=>['category.destroy', $category->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!} 
		</td>		
		
	</thead>
	@endforeach
</table>


{!! $categories->render() !!}

@stop
