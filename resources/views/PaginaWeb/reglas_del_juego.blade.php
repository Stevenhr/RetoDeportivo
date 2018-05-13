@extends('PaginaWeb/index')

@section('contenido')
<div class="container-fluid">
	
	<div class="card mb-3">
	  <h3 class="card-header">Reglas del Juego</h3>
	  <div class="card-body">
	    <p><h1>Introducción</h1>
		Una polla es un juego de predicción de resultados en partidos de fútbol en el que los participantes acumulan puntos por los diferentes aciertos que tengan en los marcadores de los mismos. Se le llama polla o en la mayoría de los países de latinoamérica a este tipo de juegos, tradicionales entre los aficionados, especialmente durante torneos como el mundial de fútbol de la FIFA. En México se le llama quiniela, al igual que en España, donde te también se conocen como porras.</p>
	  </div>
	  <img style="height: 500px; width: 100%; display: block;" src="imagenes/index/reglas.jpg" alt="Card image">
	  
	</div>
	<div class="jumbotron">
	  <h1 class="display-3">Reglamento</h1>
	  	<p class="lead">⚽ Como aspecto general, los diferentes torneos de fútbol están estructurados por una fase inicial de grupos o de todos contra todos seguidos de una segunda ronda de cuadrangulares finales previos a la elección del mejor equipo en dicho torneo.<br><br>

		⚽ Para todos los partidos los usuarios pueden pronosticar el resultado. El objetivo es predecir el resultado correcto del partido y sumar puntos.<br><br>

		⚽ Usted puede cambiar su predicción hasta 10 minutos antes de la fecha-hora de inicio del partido.</p>
	  <hr class="my-4">
	  <div class="container">
	  <div class="row">
	    <div class="col-sm">
	      <div class="card border-secondary mb-3" style="max-width: 20rem;">
			  <div class="card-header">Por acertar el resultado: </div>
			  <div class="card-body">
			    <h4 class="card-title">5 puntos en la primera ronda y 10 en las de eliminación directa</h4>
			    <p class="card-text">Si aciertas quien fue el equipo ganador o empate obtendrás 5 puntos en la primera ronda o 10 puntos en las fases de eliminación directa. Por ejemplo, tu pronóstico fue 2 - 1, y el partido terminó 1 - 0, obtendrás 5 puntos por acertar el resultado (en la primera ronda). Igual caso si el partido termina 2-2 y tu pronóstico fue de 0-0.</p>
			  </div>
			</div>
	    </div>
	    <div class="col-sm">
	      <div class="card border-secondary mb-3" style="max-width: 20rem;">
			  <div class="card-header">Por acertar el número de goles de cada equipo: </div>
			  <div class="card-body">
			    <h4 class="card-title">2 puntos en la primera ronda y 4 en las de eliminación directa</h4>
			    <p class="card-text">Si aciertas el número de goles marcados por cada equipo, por ejemplo si el partido termina 2-1 y tu pronóstico fue de 0-1, obtienes 2 puntos por acertar el número de goles del visitante.</p>
			  </div>
			</div>
	    </div>
	    <div class="col-sm">
	      <div class="card border-secondary mb-3" style="max-width: 20rem;">
			  <div class="card-header">Por acertar la diferencia de goles: </div>
			  <div class="card-body">
			    <h4 class="card-title">1 punto en la primera ronda y 2 en las de eliminación directa</h4>
			    <p class="card-text">Si el partido termina 3-1 y tu pronóstico fue de 2-0, obtendrás 1 ó 2 puntos por acertar la diferencia de goles.</p>
			  </div>
			</div>
	    </div>
	   
	  </div>
	</div>
	<br>
	<h4>A continuación se observa una tabla resumen con la puntuación:</h4>
	<table class="table table-success border border-success">
	  <thead>
	    <tr>
	      <th scope="col">&nbsp;</th>
	      <th scope="col">EN PRIMERA RONDA</th>
	      <th scope="col">EN FASES ELIMINATORIAS</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr class="table-light">
	      <th scope="row">Por acertar el resultado</th>
	      <td>5 puntos</td>
	      <td>10 puntos</td>
	    </tr>
	    <tr class="table-light">
	      <th scope="row">Por acertar el número de goles de cada equipo</th>
	      <td>2 puntos</td>
	      <td>4 puntos</td>
	    </tr>
	    <tr class="table-light">
	      <th scope="row">Por acertar la diferencia de goles</th>
	      <td>1</td>
	      <td>2</td>
	    </tr>
	    <tr class="table-info">
	      <th scope="row"><b>TOTAL MAXIMO</b></th>
	      <td><b>10 PUNTOS</b></td>
	      <td><b>20 PUNTOS</b></td>
	    </tr>
	  </tbody>
	</table> 
	</div>
</div>


@endsection