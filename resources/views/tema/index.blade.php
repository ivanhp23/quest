@extends('layouts.admin')
@include('alerts.success')
@section('content')
<table class="table">
	<thead>
		<th>Nombre del tema</th>
		<th>Modulo al que pertenece</th>
		<th>Operaciones</th>

	</thead>

	@foreach($temas as $tema)
     <tbody>
     	<td>{{$tema->nombre_tema}}</td>
     	<td>{{$tema->nombre_modulo}}</td>
     	<td>
           {!!link_to_route('tema.edit', $title = 'Editar', $parameters = $tema->id, $attributes = ['class'=>'btn btn-primary'])!!}
     	</td>
     </tbody>
	@endforeach

</table>

@endsection