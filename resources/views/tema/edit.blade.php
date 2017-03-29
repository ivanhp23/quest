@extends('layouts.admin')
@section('content')
@include('alerts.request')
{!!Form::model($tema,['route'=>['tema.update',$tema->id],'method'=>'PUT'])!!}
@include('tema.form.tema')
	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['tema.destroy',$tema->id],'method'=>'DELETE'])!!}
	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop