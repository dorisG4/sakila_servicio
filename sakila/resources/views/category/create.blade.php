@extends('layouts.admin')
@section('content')
<h2>Categoria</h2>
<br>

{!!Form::open(['route'=>'category.store', 'method'=>'POST'])!!}
	
	@include('forms.categoryForm')
	
	{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	<br><br>
	<p><a href="/category">Regresar</a></p>	
{!!Form::close()!!}

@stop