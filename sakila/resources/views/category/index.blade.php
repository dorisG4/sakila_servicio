@extends('layouts.admin')

	  @if(Session::has('message'))
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		   {{Session::get('message')}}
		</div>
	  @endif

@section('content')

		{!! Form::open(['route' => 'category.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
		    <div class="form-group">
		     {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Categoria']) !!}
		    </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        {!! Form::close() !!}

<table class="table">
    <thead>
	    <th>
        {{ Form::open(array('url' => 'category/create', 'method' => 'get')) }}   
            {!!Form::submit('Nueva Categoria',['class'=>'btn btn-primary'])!!}
        {{ Form::close() }}	    
 
		</th>
		<th></th>
		<th></th>
		
	</thead>
	<thead>
		<th>Categorias Existentes</th>
		<th>

		</th>
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
