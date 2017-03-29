@extends('layouts.principal')
	@section('content')
	@include('alerts.errors')
	<!-- @include('alerts.request') -->
				<div class="header">
			<div class="top-header">
				<div class="logo">
					<!-- <a href="#"><img src="images/logo.png" alt="" /></a> -->
					<p>Sistema Question</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-info">
				<!-- <h1>Accceso usuarios</h1> -->
				<a>Accceso a usuarios</a>
				{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('correo','Correo:')!!}	
						{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('contrasena','Contraseña:')!!}	
						{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
					</div>
						<!-- <div class="form-group" ng-click="vm.ss()">
							<a ng-click = "">¿Olvido su contraseña?</a>
						</div> -->
						
					{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
			</div>
		</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
		
		</ul>
			
		</div>
	@endsection	