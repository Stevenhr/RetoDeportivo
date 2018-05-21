@extends('master')
@section('content')
<br><br>

<center><h1>Creación de Eventos</h1>
	{!! Form::open(['url' => 'agregarEvento','files' => true,'enctype' => 'multipart/form-data', 'method' => 'POST']) !!}
	{!! csrf_field() !!}
	  <fieldset>
	  	<div class="form-group">
		  <label class="col-form-label" for="nombre">Nombre</label>
		  <input type="text" class="form-control" placeholder="Copa Mundial de Fútbol Rusia 2018" id="nombre" name="nombre" required>
		</div>
	  	<div class="form-group">
		  <label class="col-form-label" for="fechaI">Fecha de Inicio</label>
		  <input type="date" class="form-control" placeholder="Fecha" id="fechaI" name="fechaI" required>
		</div>
	  	<div class="form-group">
		  <label class="col-form-label" for="fechaF">Fecha de Finalización</label>
		  <input type="date" class="form-control" placeholder="Fecha" id="fechaF" name="fechaF" required>
		</div>
	    <div class="form-group">
	      <label for="imagen">Imagen del evento</label>
	      <input type="file" class="form-control-file" id="imagen" name="imagen" aria-describedby="fileHelp">
	      <small id="fileHelp" class="form-text text-muted">Insertar una imagen representativa del evento</small>
	    </div>
	    <button type="submit" class="btn btn-primary">Submit</button>
	  </fieldset>
	{!! Form::close() !!}
</center>
@stop