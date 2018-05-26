@extends('master')
@section('content')
<?php $time2= date('Y-m-d',time());
//echo $time2; 
?>

<br><br>
  <div class="container-fluid" style="background-color: #F4D03F;color: white;">
 <center><h1 style="padding-top: 20px;padding-bottom: 20px">Creación de Eventos</h1> </center>
</div>
@yield('error')
	{!! Form::open(['url' => 'agregarEvento','files' => true,'enctype' => 'multipart/form-data', 'method' => 'POST']) !!}
	{!! csrf_field() !!}
	<center>
	  <fieldset>
	  	<div class="form-group">
		  <label class="col-form-label" for="nombre" style="color: #D4AC0D  ;font-family:arial;font-weight: bold;">Nombre Evento :</label><br>
		  <input type="text" class="form-control" placeholder="Copa Mundial de Fútbol Rusia 2018" id="nombre" name="nombre" required  style="padding-left: 100px;padding-right: 100px">
		</div>
		<br>
	  	<div class="form-group">
		  <label class="col-form-label" for="fechaI" style="color: #D4AC0D  ;font-family:arial;font-weight: bold;">Fecha de Inicio:</label><br>
		  <input type="date" class="form-control"  min="<?php echo date('Y-m-d',time());?>" placeholder="Fecha" id="fechaI" name="fechaI" required >
		</div>
		<br>
	  	<div class="form-group">
		  <label class="col-form-label" for="fechaF" style="color: #D4AC0D  ;font-family:arial;font-weight: bold;">Fecha de Finalización:</label><br>
		  <input type="date" class="form-control" min="<?php echo date('Y-m-d',strtotime(date("Y-m-d", time()) . "+5 months")); ?>" placeholder="Fecha" id="fechaF" name="fechaF" required>
		</div>
		<br>
	    <div class="form-group">
	      <label for="imagen"  style="color: #D4AC0D  ;font-family:arial;font-weight: bold;">Imagen del evento</label>
	      <br>
	      <input type="file" class="form-control-file" id="imagen" name="imagen" aria-describedby="fileHelp">
	      <br>
	      <small id="fileHelp" class="form-text text-muted" style="color: red">Insertar una imagen representativa del evento</small>
	    </div>
	    <br>
	    <button type="submit" class="btn btn-outline-warning" style="padding-left: 100px;padding-right: 100px">Submit</button>
	  </fieldset>
	</center>
	{!! Form::close() !!}
@stop