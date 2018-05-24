@extends('master')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<br>
			<h2>Listado de equipos</h2>
			<br>
			<a href="{{URL::action('Palmare\equiposController@create')}}" class="btn btn-primary">Nuevo equipo</a> 
			<br><br>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nombre</th>
						<th>Propietario</th>
						<th>Presidente</th>
						<th>Entrenador</th>
						<th>Estadio</th>
						<th>Ubicacion</th>
						<th>Fundado</th>
					</thead>

					<tbody>
						@foreach ($equipos as $datos)
						<tr>
							<td>{{ $datos->nombre }}</td>
							<td>{{ $datos->vc_propietario }} cm</td>
							<td>{{ $datos->vc_presidente }}</td>
							<td>{{ $datos->vc_entrenador }}</td>
							<td>{{ $datos->vc_estadio }}</td>
							<td>{{ $datos->vc_ubicacion }}</td>
							<td>{{ $datos->vc_fundado }}</td>
							<td>
								<a href="{{URL::action('Palmare\equiposController@edit', $datos->i_pk_id)}}" class="btn btn-primary">Editar</a> 
            					<a href="{{URL::action('PalmareequiposController@show', $datos->i_pk_id)}}" class="btn btn-success">Mostrar</a>
								<a href="" data-target="#modal-delete-{{$datos->i_pk_id}}" data-toggle="modal" class="btn btn-danger">Eliminar</a> 
							</td>
						</tr>
						@include('Palmare.destroyEquipo')<!--aqui hay duda-->
						@endforeach
					</tbody>
				</table>
			</div>
			{{$equipos->render()}}
		</div>
	</div>
	
	  <!---->
@endsection