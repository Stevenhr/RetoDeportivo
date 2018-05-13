@extends('PaginaWeb/index')

@section('contenido')
	<div class="container-fluid">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" style="height: 500px;">
		    <div class="carousel-item active rounded">
		      <img class="d-block w-100" src="imagenes/index/prueba1.jpg" alt="First slide" style="height: 500px;">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="imagenes/index/prueba2.jpg" alt="Second slide" style="height: 500px;">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="imagenes/index/prueba3.jpg" alt="Third slide" style="height: 500px;">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Anterior</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Siguiente</span>
		  </a>
		</div>
		<br>
		<div class="jumbotron">
		  <h1 class="display-3">Bienvenidos!!</h1>
		  <p class="lead">Este es un Sistema de Retos Deportivos, donde el principal objetivo, es realizar el registro de los resultados de los eventos creados en el sistema, esto con el fin de sumar puntos por cada acierto, el que mayor numero de puntos sume al finalizar la competencia será el ganador de dicho evento.</p>
		  <hr class="my-4">
		  <div class="container">
		  <div class="row">
		    <div class="col-sm">
		      <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
				  <div class="card-header">⚽ La Polla del Futbol ⚽</div>
				  <div class="card-body">
				    <h4 class="card-title">Grita: ¡¡GOOOOOL!!</h4>
				    <p class="card-text">Puedes participar en diferentes eventos de la polla del futbol, pide tu solicitud de registro para que nunca dejes de gritar ¡¡¡GOOOOL!!!</p>
				  </div>
				</div>
		    </div>
		    <div class="col-sm">
		      <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				  <div class="card-header">PRUEBA</div>
				  <div class="card-body">
				    <h4 class="card-title">EJEMPLO</h4>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
		    </div>
		    <div class="col-sm">
		      <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
				  <div class="card-header">PRUEBA</div>
				  <div class="card-body">
				    <h4 class="card-title">Ejemplo 2</h4>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
		    </div>
		  </div>
		</div>
		</div>
		
	</div>
@endsection