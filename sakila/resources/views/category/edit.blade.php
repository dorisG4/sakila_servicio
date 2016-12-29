@extends('layouts.admin')
@section('content')

<h2>Actualizar Categoria</h2>
<br>

{!!Form::model($category,['route'=>['category.update', $category->id], 'method'=>'PUT'])!!}
	
	@include('forms.categoryForm')

	<div class="form-group col-md-2">
	{!!Form::submit('Actualizar',['class'=>'btn btn-success'])!!}
	</div>

	<div class="form-group col-md-2">
	<a href="{{ route('category.index')}}" class="btn btn-warning">Cancelar</a>
	</div>

{!!Form::close()!!}
<br>		

@stop 