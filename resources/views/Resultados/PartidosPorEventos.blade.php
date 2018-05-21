@extends('master')
@section('content')
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Regisro</a></li>
 <li class="breadcrumb-item active">Resultados finales de partidos </li>
</ol>
<div class="jumbotron">
	<div class="card border-secondary mb-3">
	  <div class="card-header text-center"><b>Partidos Por Evento</b></div>
	  <div class="card-body">
		<div class="dropdown-divider"></div>	
	  	<div class="form-group btn-container text-center">
        <button class="btn btn-outline-success col-md-6 m-2" href="#" data-toggle="modal" data-target="#CrearPartido"><i class="fa fa-car fa-lg fa-fw"></i>Crear Partidos</button>
      </div>
      <div class="dropdown-divider"></div>
     <div class="form-group">
      <select class="custom-select" name="Evento" id="Evento">
			  <option selected="">Selecione Evento a Buscar</option>
			  @foreach ($Eventos as $Evento)
				<option value="{{$Evento['Id'] }}">{{$Evento['Evento'] }}</option>
			  @endforeach
			</select>
    </div>
    <div class="dropdown-divider"></div>	
    <table class="table">
			  <thead class="table-secondary text-center">
			    <tr>
			      <th scope="col">Evento</th>
			      <th scope="col">Fecha | Hora</th>
			      <th scope="col">Ciudad | Estadio</th>
			      <th scope="col">Equipo</th>
			      <th scope="col">Vs</th>
			      <th scope="col">Equipo</th>
			      <th scope="col">Estado</th>
			      <!--<th scope="col">Agregar</th>-->
			      <th scope="col" colspan="2">Opciones</th>
			    </tr>
			  </thead>
			  <tbody>
@foreach ($datosPartidos as $partidos)
			    <tr>
			      <td>{{ $partidos['Evento'] }}</td>
			      <td>{{ $partidos['Fecha']." | ".$partidos['Hora'] }}</td>
			      <td>{{ $partidos['Lugar']." | ".$partidos['Estadio'] }}</td>
			      <td>{{ $partidos['Equipo1']}}</td>
			      <td>Vs</td>
			      <td>{{ $partidos['Equipo2']}}</td>
			      <td>{{ $partidos['Estado']}}</td>
			      <td><button type="button" class="btn btn-warning" href="#" data-toggle="modal" data-target="{{"#ModificarPartido".$partidos['Id'] }}">Modificar</button></td>
			      <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="{{"#EliminarPartido".$partidos['Id'] }}">Eliminar</button></td>
			    </tr>
@endforeach
			  </tbody>
			</table>
      <!--Formularios-->
@foreach ($datosPartidos as $partidos)																			
      <!--Modificar partido-->
      <div class="modal fade" id="{{"ModificarPartido".$partidos['Id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-car"></i> Modificar Partido</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="{{url('ModificarPartido')}}" method="POST">
			          {{ csrf_field() }}
			           <div class="form-group">
			            <label for="Evento">Evento</label>
			            <select class="custom-select" name="Evento" id="Evento">
	    						  <option selected="">Selecione Evento</option>
	      						  @foreach ($Eventos as $Evento)
											<option value="{{$Evento['Id'] }}">{{$Evento['Evento'] }}</option>
										  @endforeach
	    						</select>
			          </div>
			          <div class="form-group">
			            <div class="form-row">
			              <div class="col-md-6">
			                <label for="Equipo1">Equipo 1</label>
			                <select class="custom-select" name="Equipo1" id="Equipo1">
			    						  <option selected="">Selecione Equipo1</option>
			      						<option value="1">One</option>
			      						<option value="2">Two</option>
			      						<option value="3">Three</option>
			    						</select>
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Equipo 2</label>
			                <select class="custom-select" name="Equipo2" id="Equipo2">
			    						  <option selected="">Selecione Equipo2</option>
			      						<option value="1">One</option>
			      						<option value="2">Two</option>
			      						<option value="3">Three</option>
			    						</select>
			              </div>
			            </div>
			          </div>
			          <div class="form-group">
			            <div class="form-row">
			              <div class="col-md-6">
			                <label for="Hora">Hora</label>
			                <input class="form-control" id="Hora" value="{{ $partidos['Hora'] }}" name="Hora" type="time" aria-describedby="nameHelp" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Fecha">Fecha</label>
			                <input class="form-control" id="Fecha" value="{{ $partidos['Fecha'] }}" name="Fecha" type="date" aria-describedby="nameHelp" required="">
			              </div>
			            </div>
			          </div>
			          <div class="form-group">
			            <div class="form-row">
			              <div class="col-md-6">
			                <label for="Ciudad">Ciudad</label>
			                <input class="form-control" id="Ciudad" value="{{ $partidos['Lugar'] }}" name="Ciudad" type="text" aria-describedby="nameHelp" placeholder="Ingrese Ciudad" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Estadio">Estadio</label>
			                <input class="form-control" id="Estadio" value="{{ $partidos['Estadio'] }}" name="Estadio" type="text" aria-describedby="nameHelp" placeholder="Ingrese Estadio" required="">
			              </div>
			            </div>
			          </div>
			          <div class="form-group">
			            <label for="Estado">Numero Placa</label>
			            <select class="custom-select" name="Estado" id="Estado">
			    					<option selected="">Selecione Estado Partido</option>
			      				<option value="1">Activo</option>
			      				<option value="2">Terminado</option>
			    				</select>
			          </div>
			          <button type="submit" name="idUsuario" value="{{$partidos['Id']}}"* class="btn btn-primary btn-block">Modificar Partido</button>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
<!--Eliminar partido-->
      <div class="modal fade" id="{{"EliminarPartido".$partidos['Id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="login-head text-danger"></i>Eliminar Partido</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<p class="text-danger text-center">Esta seguro de eliminar este partido</p>
			      	<form action="{{url('EliminarPartido')}}" method="POST">
			      		 {{ csrf_field() }}
			        	<button type="submit" name="idUsuario" value="{{$partidos['Id']}}" class="btn btn-danger btn-block">Eliminar Partido</button>
			      	</form>
			      </div>
			    </div>
			  </div>
			</div>
@endforeach
      <!--Crear partido-->
      <div class="modal fade" id="CrearPartido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-car"></i> Crear Partido</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="{{url('RegistroPartidos')}}" method="POST">
			          {{ csrf_field() }}
			           <div class="form-group">
			            <label for="Evento">Evento</label>
			            <select class="custom-select" name="Evento" id="Evento">
	    						  <option selected="">Selecione Evento</option>
	      						@foreach ($Eventos as $Evento)
											<option value="{{$Evento['Id'] }}">{{$Evento['Evento'] }}</option>
										@endforeach
	    						</select>
			          </div>
			          <div class="form-group">
			            <div class="form-row">
			              <div class="col-md-6">
			                <label for="Equipo1">Equipo 1</label>
			                <select class="custom-select" name="Equipo1" id="Equipo1">
			    						  <option selected="">Selecione Equipo1</option>
			      						<option value="1">One</option>
			      						<option value="2">Two</option>
			      						<option value="3">Three</option>
			    						</select>
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Equipo 2</label>
			                <select class="custom-select" name="Equipo2" id="Equipo2">
			    						  <option selected="">Selecione Equipo2</option>
			      						<option value="1">One</option>
			      						<option value="2">Two</option>
			      						<option value="3">Three</option>
			    						</select>
			              </div>
			            </div>
			          </div>
			          <div class="form-group">
			            <div class="form-row">
			              <div class="col-md-6">
			                <label for="Hora">Hora</label>
			                <input class="form-control" id="Hora" name="Hora" type="time" aria-describedby="nameHelp" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Fecha">Fecha</label>
			                <input class="form-control" id="Fecha" name="Fecha" type="date" aria-describedby="nameHelp" required="">
			              </div>
			            </div>
			          </div>
			          <div class="form-group">
			            <div class="form-row">
			              <div class="col-md-6">
			                <label for="Ciudad">Ciudad</label>
			                <input class="form-control" id="Ciudad" name="Ciudad" type="text" aria-describedby="nameHelp" placeholder="Ingrese Ciudad" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Estadio">Estadio</label>
			                <input class="form-control" id="Estadio" name="Estadio" type="text" aria-describedby="nameHelp" placeholder="Ingrese Estadio" required="">
			              </div>
			            </div>
			          </div>
			          <div class="form-group">
			            <label for="Estado">Estado</label>
			            <select class="custom-select" name="Estado" id="Estado">
			    					<option selected="">Selecione Estado Partido</option>
			      				<option value="1">Activo</option>
			      				<option value="2">Terminado</option>
			    				</select>
			          </div>
			          <button type="submit"  class="btn btn-primary btn-block">Crear Partido</button>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!--Fin Modal-->
			
	  </div>
	</div>
</div>
@stop