@extends('master')
@section('content')
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Registro</a></li>
 <li class="breadcrumb-item active">Agregar Estadisticas</li>
</ol>
<div class="jumbotron">
	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link active show" data-toggle="tab" href="#home">Agregar Estadisticas</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" data-toggle="tab" href="#profile">Modificar Eliminar Estadisticas</a>
	  </li>
	</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade active show" id="home">
			<div class="card border-secondary mb-3">
			  <div class="card-header text-center"><b>Estadisticas finales de partidos</b></div>
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
				      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="{{"#AgregarResultados".$partidos['Id'] }}">Estadisticas</button></td>
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
					   	  <th scope="col">Partido</th>
					      <th scope="col">Remates</th>
					      <th scope="col">Posesion</th>
					      <th scope="col">Faltas</th>
					      <th scope="col">Tarjetas A.</th>
					      <th scope="col">Tarjetas R</th>
					      <th scope="col">T. Esquinas</th>
					      <th scope="col" colspan="2" class="text-center">Opciones</th>
					    </tr>
					  </thead>
					  <tbody>
		@foreach ($Estadisticas as $partidos)
			
				    <tr>
				      <td>a vs a</td>
				      <td>{{ $partidos['RematesEquipo1']." | ".$partidos['RematesEquipo2'] }}</td>
				      <td>{{ $partidos['PosesionEquipo1']. " | " .$partidos['PosesionEquipo2'] }}</td>
				      <td>{{ $partidos['FaltasEquipo1']}} | {{ $partidos['FaltasEquipo1']}}</td>
				      <td>{{ $partidos['TarjetaA1']}}| {{ $partidos['TarjetaA2']}}</td>
				      <td>{{ $partidos['TarjetaR1']}} | {{ $partidos['TarjetaR2']}}</td>
				      <td>{{ $partidos['Esquinas1']}} | {{ $partidos['Esquinas2']}}</td>	
				      <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="{{"#ModificarEstadisticas".$partidos['Id'] }}">Resultado</button></td>
				      <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="{{"#EliminarEstadisticas".$partidos['Id'] }}">Eliminar</button></td>
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
			        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-car"></i> Agregar Estadisticas</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="{{url('RegistroEstadisticas')}}" method="POST">
			          {{ csrf_field() }}
			          <div class="form-group">
			            <div class="form-row">
			              <div class="col-md-6">
			                <label for="Equipo1">Remates equipo 1</label>
			                 <input class="form-control" id="rEquipo1"  name="rEquipo1" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 1" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Remates equipo 2</label>
			                 <input class="form-control" id="rEquipo2"  name="rEquipo2" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Posesión Equipo 1</label>
			                 <input class="form-control" id="pEquipo1"  name="pEquipo1" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Posesion Equipo 2</label>
			                 <input class="form-control" id="pEquipo2"  name="pEquipo2" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Faltas equipo 1</label>
			                 <input class="form-control" id="fEquipo1"  name="fEquipo1" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Faltas equipo 2</label>
			                 <input class="form-control" id="fEquipo2"  name="fEquipo2" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			               <div class="col-md-6">
			                <label for="Equipo2">Tarjetas Amarillas 1</label>
			                 <input class="form-control" id="tAEquipo1"  name="tAEquipo1" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			               <div class="col-md-6">
			                <label for="Equipo2">Tarjetas Amarillas 2</label>
			                 <input class="form-control" id="tAEquipo2"  name="tAEquipo2" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Tarjetas Rojas 1</label>
			                 <input class="form-control" id="tREquipo1"  name="tREquipo1" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Tarjetas Rojas 2</label>
			                 <input class="form-control" id="tREquipo2"  name="tREquipo2" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Tiros Esquina 1</label>
			                 <input class="form-control" id="tEsquinaEquipo1"  name="tEsquinaEquipo1" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Tiros esquina 2</label>
			                 <input class="form-control" id="tEsquinaEquipo2"  name="tEsquinaEquipo2" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			            </div>
			          </div>
			          <button type="submit" value="{{$partidos['Id']}}" name="IdResultado" class="btn btn-success btn-block">Agregar Estadisticas</button>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
@endforeach
@foreach ($Estadisticas as $partidos)
      <!--Modificar Resultados-->
      <div class="modal fade" id="{{"ModificarEstadisticas".$partidos['Id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-car"></i> Modificar Resultado</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="{{url('ModificarEstadisticas')}}" method="POST">
			          {{ csrf_field() }}
			          <div class="form-group">
			            <div class="form-row">
			              <div class="col-md-6">
			                <label for="Equipo1">Remates equipo 1</label>
			                 <input class="form-control" id="rEquipo1"  name="rEquipo1" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 1" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Remates equipo 2</label>
			                 <input class="form-control" id="rEquipo2"  name="rEquipo2" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Posesión Equipo 1</label>
			                 <input class="form-control" id="pEquipo1"  name="pEquipo1" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Posesion Equipo 2</label>
			                 <input class="form-control" id="pEquipo2"  name="pEquipo2" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Faltas equipo 1</label>
			                 <input class="form-control" id="fEquipo1"  name="fEquipo1" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Faltas equipo 2</label>
			                 <input class="form-control" id="fEquipo2"  name="fEquipo2" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			               <div class="col-md-6">
			                <label for="Equipo2">Tarjetas Amarillas 1</label>
			                 <input class="form-control" id="tAEquipo1"  name="tAEquipo1" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			               <div class="col-md-6">
			                <label for="Equipo2">Tarjetas Amarillas 2</label>
			                 <input class="form-control" id="tAEquipo2"  name="tAEquipo2" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Tarjetas Rojas 1</label>
			                 <input class="form-control" id="tREquipo1"  name="tREquipo1" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Tarjetas Rojas 2</label>
			                 <input class="form-control" id="tREquipo2"  name="tREquipo2" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Tiros Esquina 1</label>
			                 <input class="form-control" id="tEsquinaEquipo1"  name="tEsquinaEquipo1" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			              <div class="col-md-6">
			                <label for="Equipo2">Tiros esquina 2</label>
			                 <input class="form-control" id="tEsquinaEquipo2"  name="tEsquinaEquipo2" type="number" aria-describedby="nameHelp" placeholder="Remates Equipo 2" required="">
			              </div>
			          <button type="submit" value="{{$partidos['Id']}}" name="IdResultado" class="btn btn-warning btn-block">Modificar Estadisticas</button>
			      </div>
			    </div>
			   </form>
			      </div>
			    </div>
			  </div>
			</div>
	
			<!--Eliminar Resultado-->
     <div class="modal fade" id="{{"EliminarEstadisticas".$partidos['Id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			      	<form action="{{url('EliminarEstadisticas')}}" method="POST">
			      		 {{ csrf_field() }}
			        	<button type="submit" name="IdResultado" value="{{$partidos['Id']}}" class="btn btn-danger btn-block">Eliminar Resultado</button>
			      	</form>
			      </div>
			  </div>
			</div>
		</div>
@endforeach
@stop