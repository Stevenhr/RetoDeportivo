@extends('master') 
 
@section('content') 
   
  <h2>Formulario registro de equipos</h2> 
 
  {!! Form::open(array('url'=>'equipos', 'method'=>'POST', 'autocomplete'=>'off', 'enctype' => 'multipart/form-data', 'class'=>'needs-validation', 'novalidate' )) !!} 
  {{Form::token()}} 
 
  <div class="row"> 
    <div class="col-md-12"> 
      <div class="form-group"> 
        <label for="nombre">Nombre Equipo:</label> 
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del equipo" aria-describedby="nombreHelp" required> 
        <div class="valid-feedback"> 
              !Bien¡ 
          </div> 
          <div class="invalid-feedback"> 
                Ingrese el nombre del equipo. 
            </div> 
      </div> 
    </div> 
    <div class="col-md-4"> 
      <div class="form-group"> 
        <label for="vc_propietario">Propietario</label> 
        <input type="number" class="form-control" name="vc_propietario" id="vc_propietario" placeholder="propietario del equipo" required> 
        <div class="valid-feedback"> 
			        !Bien¡
			    </div>
			    <div class="invalid-feedback">
		          	Ingrese el propietario del equipo.
		        </div>
			</div>
		</div>	
		<div class="col-md-4">
			<div class="form-group">
				<label for="vc_presidente">Presidente:</label>
				<input type="text" class="form-control" name="vc_presidente" id="vc_presidente" placeholder="presidente del equipo" required>
				<div class="valid-feedback">
			        !Bien¡
			    </div>
			    <div class="invalid-feedback">
		          	Ingrese el presidente del equipo.
		        </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="vc_entrenador">Entrenador:</label>
				<input type="text" class="form-control" name="vc_entrenador" id="vc_entrenador" placeholder="Entrenador del equipo" required>
				<div class="valid-feedback">
			        !Bien¡
			    </div>
			    <div class="invalid-feedback">
		          	Ingrese el entrenador del equipo.
		        </div>
			</div>
		</div>	
		<div class="col-md-4">
			<div class="form-group">
				<label for="vc_estadio">Estadio:</label>
				<input type="text" class="form-control" name="vc_estadio" id="vc_estadio" placeholder="Estadio del equipo" required>
				<div class="valid-feedback">
			        !Bien¡
			    </div>
			    <div class="invalid-feedback">
		          	Ingrese el estadio del equipo.
		        </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="vc_ubicacion">Ubicacion:</label>
				<input type="text" class="form-control" name="vc_ubicacion" id="vc_ubicacion" placeholder="Ubicacion del equipo" required>
				<div class="valid-feedback">
			        !Bien¡
			    </div>
			    <div class="invalid-feedback">
		          	Ingrese la ubicacion del equipo.
		        </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="vc_fundado">Fundado:</label>
				<input type="text" class="form-control" name="vc_fundado" id="vc_fundado" placeholder="Fundacion del equipo" required>
				<div class="valid-feedback">
			        !Bien¡
			    </div>
			    <div class="invalid-feedback">
		          	Ingrese cuando se fundó el equipo.
		        </div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">	
			<div class="col-md-1">
				<button type="submit" class="btn btn-success">Enviar</button>	
			</div>
			<div class="col-md-1">
				<button type="reset" class="btn btn-danger">Cancelar</button>	
			</div>	
		</div>	    
	</div>
		
	{!! Form::close() !!}

<script>
	(function() {
	  	'use strict';
	  	window.addEventListener('load', function() {
	    	var forms = document.getElementsByClassName('needs-validation');
	    	var validation = Array.prototype.filter.call(forms, function(form) {
	      		form.addEventListener('submit', function(event) {
	        		if (form.checkValidity() === false) {
	       				event.preventDefault();
	         			event.stopPropagation();
	        		}
	        	form.classList.add('was-validated');
	      		}, false);
	    	});
	  	}, false);
	})();
</script>
	

@stop