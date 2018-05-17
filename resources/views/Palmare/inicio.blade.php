@extends('master')

@section('contenido')
	<div class="row">
		<div class="col-md-8">
			<br>
			<h2>Listado de jugadores</h2>
			<br>
			<a href="create" class="btn btn-primary">Nuevo jugador</a>
			<br><br>
			@include('search')
		</div>
	</div>
hhkjhkjhkjhkjhkjh
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nombre</th>
						<th>Altura</th>
						<th>Dorsal</th>
						<th>Posicion</th>
						<th>Lugar de nacimiento</th>
						<th>Fecha de nacimiento</th>
						<th>Opciones</th>
					</thead>

					<tbody>
						@foreach ($jugadores as $datos)
						<tr>
							<td>{{ $datos->nombre }}</td>
							<td>{{ $datos->i_altura }}</td>
							<td>{{ $datos->vc_dorsal }}</td>
							<td>{{ $datos->vc_posicion }}</td>
							<td>{{ $datos->vc_lugarNacimiento }}</td>
							<td>{{ $datos->d_fechanacimiento }}</td>
							<td>
								<a href="create" class="btn btn-primary">Editar</a>
								<a href="{{URL::action('jugadoresController@show', $datos->i_pk_id)}}" class="btn btn-primary">Mostrar</a>
								<a href="{{URL::action('Palmare\jugadoresController@destroy', $datos->i_pk_id)}}" class="btn btn-primary">Eliminar</a> 
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{$jugadores->render()}}
		</div>
	</div>
	
	  <!---->
@endsection