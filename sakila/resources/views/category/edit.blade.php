@extends('layouts.admin')
@section('content')

<p><a href="/category">Regresar</a></p>	

<h2>Categoria</h2>
<br>

{!!Form::model($category,['route'=>['category.update', $category->id], 'method'=>'PUT'])!!}
	@include('forms.categoryForm')
	{!!Form::submit('Actualizar',['class'=>'btn btn-success'])!!}
{!!Form::close()!!}
<br>		

@stop 