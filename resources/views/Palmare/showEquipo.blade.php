@extends('master')

@section('content')
	
	<br><br>

	<div class="card mb-3">
		<div class="card-body">
		    <h1 class="card-title">{{$equipos->nombre}}</h1>
		    <h3 class="card-title">Datos del equipo</h3>
		    <p class="card-text">Propietario: {{$equipos->vc_propietario}}</p>
		    <p class="card-text">Presidente: {{$equipos->vc_dvc_presidente}}</p>
		    <p class="card-text">Entrenador: {{$equipos->vc_entrenador}}</p>
		    <p class="card-text">Estadio: {{$equipos->vc_estadio}}</p>
		    <p class="card-text">Ubicacion: {{$equipos->vc_ubicacion}}</p>
		    <p class="card-text">Fundado: {{$equipos->vc_fundado}}</p>
		</div>
	</div>
@stop