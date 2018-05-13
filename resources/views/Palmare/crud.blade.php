@extends('formulario')
@section('crud')
<center><h1>Crud</h1>
	{!! Form::open(['url' => 'iniciarCrud','files' => true,'enctype' => 'multipart/form-data', 'method' => 'POST']) !!}
	{!! csrf_field() !!}




	kdsjkjkladjkgl


	kljkl
	  <fieldset>
	  	<div class="form-group">
		  <label class="col-form-label" for="nombre">Altura</label>
		  <input type="text" class="form-control" placeholder="Altura" id="altura" name="altura" required>
		</div>
	  	<div class="form-group">
		  <label class="col-form-label" for="dorsal">Dorsal</label>
		  <input type="text" class="form-control" placeholder="Dorsal" id="dorsal" name="dorsal" required>
		</div>
	  	<div class="form-group">
		  <label class="col-form-label" for="dorsal">Posicion</label>
		  <input type="text" class="form-control" placeholder="Posicion" id="posicion" name="posicion" required>
		</div>
	  	<div class="form-group">
		  <label class="col-form-label" for="dorsal">Lugar de Nacimiento</label>
		  <input type="text" class="form-control" placeholder="LugarNacimiento" id="lugarNac" name="lugarNac" required>
		</div>
	  	<div class="form-group">
		  <label class="col-form-label" for="fechaF">Fecha de Nacimiento</label>
		  <input type="date" class="form-control" placeholder="Fecha Nacimiento" id="fechaNac" name="fechaNac" required>
		</div>
	  	<div class="form-group">
		  <label class="col-form-label" for="dorsal">Tabla equipo</label>
		  <input type="text" class="form-control" placeholder="Tabla equipo" id="tblEquipo" name="tblEquipo" required>
		</div>
	  	<div class="form-group">
		  <label class="col-form-label" for="dorsal">Biografia</label>
		  <input type="text" class="form-control" placeholder="Biografia" id="biografia" name="biografia" required>
		</div>
	    <div class="form-group">
	      <label for="imagen">Foto del Jugador</label>
	      <input type="file" class="form-control-file" id="imagen" name="imagen" aria-describedby="fileHelp">
	      <small id="fileHelp" class="form-text text-muted">Fotografia jugador</small>
	    </div>
	    <button type="submit" class="btn btn-primary">Submit</button>
	  </fieldset>
	  <!---->
	{!! Form::close() !!}
</center>

@stop