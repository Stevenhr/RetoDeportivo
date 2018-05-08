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
		  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
		  <hr class="my-4">
		  <div class="container">
		  <div class="row">
		    <div class="col-sm">
		      <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				  <div class="card-header">Header</div>
				  <div class="card-body">
				    <h4 class="card-title">Primary card title</h4>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
		    </div>
		    <div class="col-sm">
		      <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				  <div class="card-header">Header</div>
				  <div class="card-body">
				    <h4 class="card-title">Primary card title</h4>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
		    </div>
		    <div class="col-sm">
		      <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				  <div class="card-header">Header</div>
				  <div class="card-body">
				    <h4 class="card-title">Primary card title</h4>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
		    </div>
		  </div>
		</div>
		</div>
		
	</div>
@endsection