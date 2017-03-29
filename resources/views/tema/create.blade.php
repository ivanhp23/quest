@extends('layouts.admin')
@section('content')
@include('alerts.request')
{!!Form::open(['route'=>'tema.store','method'=>'POST'])!!}
@include('tema.form.tema')
{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
@endsection