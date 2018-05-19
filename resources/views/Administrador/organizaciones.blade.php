@extends('welcome')
@section('contenido')

<center><h1>Creación de Organizaciones</h1>
	{!! Form::open(['url' => 'agregarOrganizacion','files' => true,'enctype' => 'multipart/form-data', 'method' => 'POST']) !!}
	{!! csrf_field() !!}
	  <fieldset>
	  	<div class="form-group">
		  <label class="col-form-label" for="nombre">Nombre</label>
		  <input type="text" class="form-control" placeholder="Nombre de la empresa o entidad" id="nombre" name="nombre" required>
		</div>
	  	<div class="form-group">
		  <label class="col-form-label" for="nit">Nit</label>
		  <input type="numeric" class="form-control" placeholder="Ingresa el nit" id="nit" name="nit" required>
		</div>
	  	<div class="form-group">
		  <label class="col-form-label" for="direccion">Dirección</label>
		  <input type="text" class="form-control" placeholder="Ubicación de la entidad" id="direccion" name="direccion" required>
		</div>
        <div class="form-group">
		  <label class="col-form-label" for="telefono">Teléfono</label>
		  <input type="numeric" class="form-control" placeholder="Número de contacto" id="telefono" name="telefono" required>
		</div>
        <div class="form-group">
		  <label class="col-form-label" for="Correo">Correo electrónico</label>
		  <input type="email" class="form-control" placeholder="Correo donde nos pondremos en contacto contigo" id="Correo" name="Correo" required>
		</div>
	    <div class="form-group">
	      <label for="imagen">Logo de la organización</label>
	      <input type="file" class="form-control-file" id="imagen" name="imagen" aria-describedby="fileHelp">
	      <small id="fileHelp" class="form-text text-muted">Insertar una imagen representativa de la organización</small>
	    </div>
	    <button type="submit" class="btn btn-primary">Submit</button>
	  </fieldset>
	{!! Form::close() !!}
</center>
@stop