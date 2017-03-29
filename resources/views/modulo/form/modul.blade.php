
<div class="form-group">
	{!!Form::label('Nombre:')!!}
	{!!Form::text('nombre_modulo',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre completo del profesor'])!!}
	</div>
	<div class="form-group">
	{!!Form::label('Correo:')!!}
	{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el correo del profesor'])!!}
</div>	
<div class="form-group">
		{!!Form::label('Contraseña:')!!}
	{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa la contraseña del profesor'])!!}
</div>