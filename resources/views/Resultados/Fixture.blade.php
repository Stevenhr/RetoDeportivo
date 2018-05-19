@extends('master')
@section('content')

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Regisro</a></li>
 <li class="breadcrumb-item active">Resultados finales de partidos </li>
</ol>

<div class="jumbotron">
<div class="form-group">
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Buscar..." aria-label="Amount (to the nearest dollar)">
    <div class="input-group-append">
      <button type="button" class="btn btn-primary">Buscar</button>
    </div>
  </div>
</div>
	<div class="card border-secondary mb-3">
	  <div class="card-header"><b>La Liga</b></div>
	  <div class="card-body">
	   	<table class="table">
			  <thead class="table-secondary">
			    <tr>
			      <th scope="col">Evento</th>
			      <th scope="col">Fecha | Hora</th>
			      <th scope="col">Ciudad | Estadio</th>
			      <th scope="col">Equipo</th>
			      <th scope="col">Vs</th>
			      <th scope="col">Equipo</th>
			      <th scope="col">Estado</th>
			    </tr>
			  </thead>
			  <tbody>
@foreach ($datosPartidos as $partidos)
			    <tr>
			      <th scope="row">{{ $partidos['Evento'] }}</th>
			      <td>{{ $partidos['Fecha']." | ".$partidos['Hora'] }}</td>
			      <td>{{ $partidos['Ciudad']." | ".$partidos['Estadio'] }}</td>
			      <td>{{ $partidos['Equipo1']}}</td>
			      <td>Vs</td>
			      <td>{{ $partidos['Equipo2']}}</td>
			      <td>{{ $partidos['Estado']}}</td>
			      <td><button type="button" class="btn btn-warning">Modificar</button></td>
			      <td><button type="button" class="btn btn-danger">Eliminar</button></td>
			    </tr>
@endforeach
			  </tbody>
			</table>
	  </div>
	</div>

@stop