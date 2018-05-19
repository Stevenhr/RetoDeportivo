@extends('master')
@section('content')
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Regisro</a></li>
 <li class="breadcrumb-item active">Agregar Resultados</li>
</ol>
<div class="jumbotron">
	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link active show" data-toggle="tab" href="#home">Agregar Resultado</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" data-toggle="tab" href="#profile">Modificar Eliminar Resultados</a>
	  </li>
	</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade active show" id="home">
			<div class="card border-secondary mb-3">
			  <div class="card-header text-center"><b>Resultados finales de partidos</b></div>
			  <div class="card-body">
		    <div class="dropdown-divider"></div>
		    <div class="form-group">
		      <select class="custom-select" name="Evento" id="Evento">
					  <option selected="">Selecione Evento a Buscar</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
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
					      <th scope="col">Agregar</th>
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
				      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="{{"#AgregarResultados".$partidos['Id'] }}">Resultado</button></td>
				    </tr>
		@endforeach
					  </tbody>
					</table>
			  </div>
			</div>
	  </div>
	  <div class="tab-pane fade" id="profile">
		<div class="tab-pane fade active show" id="home">
			<div class="card border-secondary mb-3">
			  <div class="card-header text-center"><b>Resultados finales de partidos</b></div>
			  <div class="card-body">
		    <div class="dropdown-divider"></div>
		    <div class="form-group">
		      <select class="custom-select" name="Evento" id="Evento">
					  <option selected="">Selecione Evento a Buscar</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>
		    </div>
		    <div class="dropdown-divider"></div>	
		    <table class="table">
					  <thead class="table-secondary">
					    <tr>
					      <th scope="col">Evento</th>
					      <th scope="col">Fecha | Hora</th>
					      <th scope="col">Ciudad | Estadio</th>
					      <th scope="col">Equipo</th>
					      <th scope="col">Vs</th>
					      <th scope="col">Equipo</th>
					      <th scope="col">Ganador</th>
					      <th scope="col">Estado</th>
					      <th scope="col" colspan="2" class="text-center">Opciones</th>
					    </tr>
					  </thead>
					  <tbody>
		@foreach ($Resultados as $partidos)
				    <tr>
				      <td>{{ $partidos['Evento'] }}</td>
				      <td>{{ $partidos['Fecha']." | ".$partidos['Hora'] }}</td>
				      <td>{{ $partidos['Lugar']." | ".$partidos['Estadio'] }}</td>
				      <td>{{ $partidos['Equipo1']}}</td>
				      <td>Vs</td>
				      <td>{{ $partidos['Equipo2']}}</td>
				      <td>{{ $partidos['rGanador']}}</td>
				      <td>{{ $partidos['rEstado']}}</td>
				      <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="{{"#ModificarResultados".$partidos['Id'] }}">Resultado</button></td>
				      <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="{{"#EliminarResultados".$partidos['Id'] }}">Eliminar</button></td>
				    </tr>
		@endforeach
					  </tbody>
					</table>
			  </div>
			</div>
	  </div>	  
	</div>
</div>
@foreach ($datosPartidos as $partidos)
      <!--Formularios-->																			
      <!--Agregar Resultados-->
      <div class="modal fade" id="{{"AgregarResultados".$partidos['Id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-car"></i> Agregar Resultado</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="{{url('RegistroResultados')}}" method="POST">
			          {{ csrf_field() }}
			          <div class="form-group">
			            <div class="form-row">
			              <div class="col-md-6">
			                <label for="Equipo1">{{ $partidos['Equipo1']}}</label>
			                 <input class="form-control" id="rEquipo1"  name="rEquipo1" type="number" aria-describedby="nameHelp" placeholder="Ingrese Resultado" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">{{ $partidos['Equipo2']}}</label>
			                 <input class="form-control" id="rEquipo2"  name="rEquipo2" type="number" aria-describedby="nameHelp" placeholder="Ingrese Resultado" required="">
			              </div>
			            </div>
			          </div>
			          <div class="form-group">
			            <label for="Ganador">Ganador</label>
			            <select class="custom-select" name="Ganador" id="Ganador" required="">
			    					<option selected="">Selecione el Ganador</option>
			      				<option value="{{ $partidos['Equipo1']}}">{{ $partidos['Equipo1']}}</option>
			      				<option value="{{ $partidos['Equipo2']}}">{{ $partidos['Equipo2']}}</option>
			    				</select>
			          </div>
			          <div class="form-group">
			            <label for="EstadoPartido">Estado Partido</label>
			            <select class="custom-select" name="EstadoPartido" id="EstadoPartido" required="">
			    					<option selected="">Selecione el Estado Partido</option>
			      				<option value="1">En Curso</option>
			      				<option value="0">Terminado</option>
			    				</select>
			          </div>
			          <button type="submit" value="{{$partidos['Id']}}" name="IdResultado" class="btn btn-success btn-block">Agregar Resultados</button>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
@endforeach
@foreach ($Resultados as $partidos)
      <!--Modificar Resultados-->
      <div class="modal fade" id="{{"ModificarResultados".$partidos['Id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-car"></i> Modificar Resultado</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="{{url('ModificarResultados')}}" method="POST">
			          {{ csrf_field() }}
			          <div class="form-group">
			            <div class="form-row">
			              <div class="col-md-6">
			                <label for="Equipo1">{{ $partidos['Equipo1']}}</label>
			                 <input class="form-control" id="rEquipo1"  name="rEquipo1" type="number" aria-describedby="nameHelp" placeholder="Ingrese Resultado" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">{{ $partidos['Equipo2']}}</label>
			                 <input class="form-control" id="rEquipo2"  name="rEquipo2" type="number" aria-describedby="nameHelp" placeholder="Ingrese Resultado" required="">
			              </div>
			            </div>
			          </div>
			          <div class="form-group">
			            <label for="Ganador">Ganador</label>
			            <select class="custom-select" name="Ganador" id="Ganador" required="">
			    					<option selected="">Selecione el Ganador</option>
			      				<option value="{{ $partidos['Equipo1']}}">{{ $partidos['Equipo1']}}</option>
			      				<option value="{{ $partidos['Equipo2']}}">{{ $partidos['Equipo2']}}</option>
			    				</select>
			          </div>
			          <div class="form-group">
			            <label for="Estado Partido">Estado Partido</label>
			            <select class="custom-select" name="Estado Partido" id="Estado Partido" required="">
			    					<option selected="">Selecione el Estado Partido</option>
			      				<option value="1">En Curso</option>
			      				<option value="0">Terminado</option>
			    				</select>
			          </div>
			          <button type="submit" value="{{$partidos['Id']}}" name="IdResu	ltado" class="btn btn-warning btn-block">Agergar Resultados</button>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!--Eliminar Resultado-->
     <div class="modal fade" id="{{"EliminarResultados".$partidos['Id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="login-head text-danger"></i>Eliminar Resultado</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<p class="text-danger text-center">Esta seguro de eliminar este Resultado</p>
			      	<form action="{{url('EliminarResultado')}}" method="POST">
			      		 {{ csrf_field() }}
			        	<button type="submit" name="IdResultado" value="{{$partidos['Id']}}" class="btn btn-danger btn-block">Eliminar Resultado</button>
			      	</form>
			      </div>
			  </div>
			</div>
		</div>
@endforeach
@stop