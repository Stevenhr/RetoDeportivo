@extends('master')

@section('content')
	
	<br><br>

	<div class="card mb-3">
		<img class="img-center" src="{{$jugadores->vc_foto}}" width="300" alt="Card image cap">
		      <div class="card-body">
		        <h1 class="card-title">{{$jugadores->nombre}}</h1>
		        <h3 class="card-title">Biografia</h3>
		        <p class="card-text">{{$jugadores->tx_biografia}}</p>
		        <h3 class="card-title">Datos del jugador</h3>
		        <p class="card-text">Altura: {{$jugadores->i_altura}}</p>
		        <p class="card-text">Dorsal: {{$jugadores->vc_dorsal}}</p>
		        <p class="card-text">Posicion: {{$jugadores->vc_posicion}}</p>
		        <p class="card-text">Lugar de nacimiento: {{$jugadores->vc_lugarNacimiento}}</p>
		        <p class="card-text">Fecha de nacimiento: {{$jugadores->d_fechanacimiento}}</p>
		</div>
	</div>
@stop