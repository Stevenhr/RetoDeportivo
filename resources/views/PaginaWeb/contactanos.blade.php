@extends('PaginaWeb/index')

@section('contenido')
<div class="container-fluid">
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-sm">
	      <div class="card mb-3">
			  <h3 class="card-header">Contactanos</h3>
			  <div class="card-body">
			    <h5 class="card-title">Puedes contactarnos a través de nuestras redes sociales, telefonos o e-mail.</h5>
			    <h6 class="card-subtitle text-muted">¡Que las dudas no te atormenten!</h6>
			  </div>
			  <div class="container">
			  	<img style="height: 200px; width: 100%; display: block;" src="imagenes/index/contactanos.png" alt="Card image">
			  </div>
			  <div class="card-body">
			    <p class="card-text">Resolvemos todas tus inquietudes, no dudes en contactarnos:</p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item"><h5>Telefonos: </h5> 99999999</li>
			    <li class="list-group-item"><h5>Correo Electronico: </h5> 99999@99999.999</li>
			    <li class="list-group-item"><h5>Redes Sociales:</h5><br> 
			    	<div class="container">
					  <div class="row">
					    <div class="col-sm">
					      <div class="card mb-3">
							  <button type="button" class="btn btn-light btn-lg btn-block"><img style="height: 40px; width: 100%; display: block;" src="imagenes/index/facebook.png" alt="Card image"></button>
							</div>
					    </div>
					    <div class="col-sm">
					     <div class="card mb-3">
							  <button type="button" class="btn btn-light btn-lg btn-block"><img style="height: 40px; width: 100%; display: block;" src="imagenes/index/twitter.png" alt="Card image"></button>
							</div>
					    </div>
					  </div>
					</div>
			    </li>
			  </ul>
			  <div class="card-footer text-muted">
			    Mente Tranquila, Problemas Resueltos.
			  </div>
			</div>
	    </div>
	    <div class="col-sm">
	     <div class="card mb-3">
			  <h3 class="card-header">Sugerencias</h3>
			  <div class="card-body">
			    <h5 class="card-title">Puedes dejarnos tus sugerencias llenando los campos del formulario.</h5>
			    <h6 class="card-subtitle text-muted">¡Con tu ayuda mejoramos dia a dia!</h6>
			  </div>
			  <div class="container">
			  	<img style="height: 200px; width: 100%; display: block;" src="imagenes/index/sugerencias.png" alt="Card image">
			  </div>
			  <div class="card-body">
			    <p class="card-text">Contigo podemos hacer la diferencia ante un mundo lleno de emociones:</p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item">
			    	<form>
					  <fieldset>
					    
					    <div class="form-group">
					      <label for="exampleInputEmail1">Correo Electronico:</label>
					      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="correo@ejemplo.com">
					    </div>					    
					    <div class="form-group">
					      <label for="exampleTextarea">Sugerencia:</label>
					      <textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Sugiero que..." style="resize: none;"></textarea>
					    </div>					    
					    <button type="submit" class="btn btn-primary">Enviar</button>
					  </fieldset>
					</form>

			    </li>
			  </ul>
			  <div class="card-footer text-muted">
			    ¡Imaginate un mundo con un sin fin de posibilidades!
			  </div>
			</div>
	    </div>
	  </div>
	</div>
</div>


@endsection