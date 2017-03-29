@extends('layouts.admin')
	@section('content')
	{!!Form::open(['route'=>'modulo.store','method'=>'POST'])!!}
	@include('modulo.form.modul')
	{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop