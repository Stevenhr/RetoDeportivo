@extends('master') 
 
@section('content') 
   
  <h2>Formulario ingreso de jugadores</h2> 
 
  {!! Form::open(array('url'=>'jugadores', 'method'=>'POST', 'autocomplete'=>'off', 'enctype' => 'multipart/form-data', 'class'=>'needs-validation', 'novalidate' )) !!} 
  {{Form::token()}} 
 
  <div class="row"> 
    <div class="col-md-12"> 
      <div class="form-group"> 
        <label for="nombre">Nombre:</label> 
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del jugador" aria-describedby="nombreHelp" required> 
        <div class="valid-feedback"> 
              !Bien¡ 
          </div> 
          <div class="invalid-feedback"> 
                Ingrese el nombre del jugador. 
            </div> 
      </div> 
    </div> 
    <div class="col-md-4"> 
      <div class="form-group"> 
        <label for="i_altura">Altura:</label> 
        <input type="number" class="form-control" name="i_altura" id="i_altura" placeholder="Altura del jugador" required> 
        <div class="valid-feedback"> 
			        !Bien¡
			    </div>
			    <div class="invalid-feedback">
		          	Ingrese la altura del jugador.
		        </div>
			</div>
		</div>	
		<div class="col-md-4">
			<div class="form-group">
				<label for="vc_dorsal">Dorsal:</label>
				<input type="text" class="form-control" name="vc_dorsal" id="vc_dorsal" placeholder="Dorsal del jugador" required>
				<div class="valid-feedback">
			        !Bien¡
			    </div>
			    <div class="invalid-feedback">
		          	Ingrese el dorsal del jugador.
		        </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="vc_posicion">Posicion:</label>
				<select name="vc_posicion" id="vc_posicion" class="form-control">

					<option value="Portero">Portero</option>
					<option value="Lateral Izquierdo">Lateral Izquierdo</option>
					<option value="Defensa Central">Defensa Central</option>
					<option value="Lateral Derecho">Lateral Derecho</option>
					<option value="Mediocampista">Mediocampista</option>
					<option value="Interior Derecho">Interion Derecho</option>
					<option value="Interior Izquierdo">Interior Izquierdo</option>
					<option value="Mediapunta">Mediapunta</option>
					<option value="Delantero Central">Delantero Central</option>
					<option value="Extremo Izquierdo">Extremo Izquierdo</option>
					<option value="Extremo Derecho">Extremo Derecho</option>
					<option value="Segundo Delantero">Segundo Delantero</option>
						
				</select>		
			</div>
		</div>	
		<div class="col-md-4">
			<div class="form-group">
				<label for="vc_lugarNacimiento">Lugar de nacimiento:</label>
				<input type="text" class="form-control" name="vc_lugarNacimiento" id="vc_lugarNacimiento" placeholder="Lugar" required>
				<div class="valid-feedback">
			        !Bien¡
			    </div>
			    <div class="invalid-feedback">
		          	Ingrese el lugar de nacimiento del jugador.
		        </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="d_fechanacimiento">Fecha de nacimiento:</label>
				<input type="date" class="form-control" name="d_fechanacimiento" id="d_fechanacimiento"  required>
				<div class="valid-feedback">
			        !Bien¡
			    </div>
			    <div class="invalid-feedback">
		          	Ingrese la fecha de nacimiento del jugador.
		        </div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="form-group">
				<label for="vc_foto">Foto del jugador:</label>
				<input type="file" class="form-control" name="vc_foto" id="vc_foto"  required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="tx_biografia">Biografia:</label>
				<textarea type="text" placeholder="Biografia del jugador" name="tx_biografia" id="tx_biografia" rows="5" cols="50" required></textarea>
			</div>
		</div>
		<div class="col-md-6"></div>
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