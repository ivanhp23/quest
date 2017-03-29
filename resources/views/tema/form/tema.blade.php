<div class="form-group">
	{!!Form::label('nombre','Nombre:')!!}
	{!!Form::text('nombre_tema',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del tema'])!!}
	</div>

	<div class="form-group">
	{!!Form::label('Modulo','Modulo:')!!}
	{!!Form::select('mod_id',$modulos)!!}
	</div>