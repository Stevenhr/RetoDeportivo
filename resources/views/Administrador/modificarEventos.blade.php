@extends('master')
@section('content')
<?php $time2= date('Y-m-d',time());
?>

<br><br>
  <div class="container-fluid" style="background-color: #F4D03F;color: white;">
 <center><h1 style="padding-top: 20px;padding-bottom: 20px">Creación de Eventos</h1> </center>
</div>
@yield('error')
	{!! Form::open(['url' => 'editarEventos','files' => true,'enctype' => 'multipart/form-data', 'method' => 'POST']) !!}
	{!! csrf_field() !!}
	<center>
	  <fieldset>
	  	<div class="form-group">
		  <label class="col-form-label" for="nombre" style="color: #D4AC0D  ;font-family:arial;font-weight: bold;">Nombre Evento :</label><br>
		  <input type="text" class="form-control" placeholder="Copa Mundial de Fútbol Rusia 2018" id="nombre" name="nombre" required  style="padding-left: 100px;padding-right: 100px" value="<?php echo $datos['vc_nombre'];?>">
		</div>
		<br>
	  	<div class="form-group">
		  <label class="col-form-label" for="fechaI" style="color: #D4AC0D  ;font-family:arial;font-weight: bold;">Fecha de Inicio:</label><br>
		  <input type="date" class="form-control"  min="<?php echo date('Y-m-d',time());?>" placeholder="Fecha" id="fechaI" name="fechaI" required value="<?php echo $datos['d_fechaInicio'];?>" >
		</div>
		<br>
	  	<div class="form-group">
		  <label class="col-form-label" for="fechaF" style="color: #D4AC0D  ;font-family:arial;font-weight: bold;">Fecha de Finalización:</label><br>
		  <input type="date" class="form-control" min="<?php echo date('Y-m-d',strtotime(date("Y-m-d", time()) . "+5 months")); ?>" placeholder="Fecha" id="fechaF" name="fechaF" required value="<?php echo $datos['d_fechaFinal'];?>">
		</div>
		<br>
	    <br>
	    <button type="submit" class="btn btn-outline-warning" style="padding-left: 100px;padding-right: 100px" value="<?php echo $datos['i_pk_id'];?>" name="id" id="id">Submit</button>
	  </fieldset>
	</center>
	{!! Form::close() !!}
@stop