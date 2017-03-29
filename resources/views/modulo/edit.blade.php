@extends('layouts.admin')
@section('content')
{!!Form::model($modulo,['route'=>['modulo.update',$modulo->id],'method'=>'PUT'])!!}
@include('modulo.form.modul')
	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['modulo.destroy',$modulo->id],'method'=>'DELETE'])!!}
	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}




@stop