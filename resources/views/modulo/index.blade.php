
@extends('layouts.admin')

@include('alerts.success')
	@section('content')
	
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Operacion</th>
			</thead>
			@foreach($modulos as $modulo)

			<tbody>
				<td>{{$modulo->nombre_modulo}}</td>
				<td>{!!link_to_route('modulo.edit', $title = 'Editar', $parameters = $modulo->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
            </tbody>
			@endforeach
		</table>

	@stop