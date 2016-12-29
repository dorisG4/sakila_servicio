@extends('layouts.admin')

@section('content')
<h2>Empleados</h2>


			<div class="form-group">
		     <a href="{{ route('staff.create')}}" class="btn btn-info">Registrar nuevo Empleado</a>
		    </div><hr>
<table class="table table-hover">
	<thead>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Sucursal</th>
		<th>Activo</th>
		<th>Telefono</th>
		<th>Foto</th>
		<th>Acción<th>
		
	</thead>
	<tbody>
		@foreach($staffs as $staff)
		<tr>	
			<td>{{$staff->first_name}} </td>
			<td>{{$staff->last_name}}</td>
			<td>{{$staff->store_id}}</td>
			<td>{{$staff->active}}</td>
			<td>{{$staff->address->phone}}</td>
		
			<td style="width: 120px;">
				<div class="panel panel-default">
				  <div class="panel-body">
				    <img src="/staffImages/{{$staff->picture}}" class="img-responsive">
				  </div>
				</div> 
			</td>

			<td>
				<a href="{{route('staff.edit',$staff->id) }}" class="btn btn-success" title="Actualizar"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

				<a href="{{route('staff.destroy',$staff->id)}}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" title="Eliminar" ><span class="glyphicon glyphicon-remove"></span></a>	
			</td>

		</tr>
		@endforeach
	</tbody>
</table>

{!!$staffs->render()!!}
@stop
