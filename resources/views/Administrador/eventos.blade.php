@extends('master')
@section('content')
<?php $time2= date('Y-m-d',time());
//echo $time2; 
?>

<br><br>
  <div class="container-fluid" style="background-color: #F4D03F;color: white;">
 <center><h1 style="padding-top: 20px;padding-bottom: 20px">Creación de Eventos</h1> </center>
</div>
@yield('error')
	{!! Form::open(['url' => 'agregarEvento','files' => true,'enctype' => 'multipart/form-data', 'method' => 'POST']) !!}
	{!! csrf_field() !!}
	<center>
	  <fieldset>
	  	<div class="form-group">
		  <label class="col-form-label" for="nombre" style="color: #D4AC0D  ;font-family:arial;font-weight: bold;">Nombre Evento :</label><br>
		  <input type="text" class="form-control" placeholder="Copa Mundial de Fútbol Rusia 2018" id="nombre" name="nombre" required  style="padding-left: 100px;padding-right: 100px">
		</div>
		<br>
	  	<div class="form-group">
		  <label class="col-form-label" for="fechaI" style="color: #D4AC0D  ;font-family:arial;font-weight: bold;">Fecha de Inicio:</label><br>
		  <input type="date" class="form-control"  min="<?php echo date('Y-m-d',time());?>" placeholder="Fecha" id="fechaI" name="fechaI" required >
		</div>
		<br>
	  	<div class="form-group">
		  <label class="col-form-label" for="fechaF" style="color: #D4AC0D  ;font-family:arial;font-weight: bold;">Fecha de Finalización:</label><br>
		  <input type="date" class="form-control" min="<?php echo date('Y-m-d',strtotime(date("Y-m-d", time()) . "+5 months")); ?>" placeholder="Fecha" id="fechaF" name="fechaF" required>
		</div>
		<br>
	    <div class="form-group">
	      <label for="imagen"  style="color: #D4AC0D  ;font-family:arial;font-weight: bold;">Imagen del evento</label>
	      <br>
	      <input type="file" class="form-control-file" id="imagen" name="imagen" aria-describedby="fileHelp">
	      <br>
	      <small id="fileHelp" class="form-text text-muted" style="color: red">Insertar una imagen representativa del evento</small>
	    </div>
	    <br>
	    <button type="submit" class="btn btn-outline-warning" style="padding-left: 100px;padding-right: 100px">Submit</button>
	  </fieldset>
	</center>
	{!! Form::close() !!}


    <div class="container border border-success">

  <br>
    <table id="table_id" class="table table-striped table-bordered nowrap border-dark" width="100%">
        <thead class="table-primary">
            <tr>
                <th><center>Id</center></th>
                <th><center>Nombre</center></th>
                <th><center>Fecha de Inicio</center></th>
                <th><center>Fecha de Finalización</center></th>
                <th><center>Modificar</center></th>
                <th><center>Eliminar</center></th>
            </tr>
        </thead>
        <tbody>
            <?php
              use App\Evento;
              use Illuminate\Database\Eloquent\Collection;
               $loginActual=Evento::All();
               $datos=$loginActual;
               for($i=0;$i<sizeof($datos);$i++){
               	$mensaje="Eliminar";
                  echo '<tr>
                  <td>
                  <center>
                  ',$datos[$i]['i_pk_id'],'
                  </center>
                  </td>
                  <td>
                  <center>
                  ',$datos[$i]['vc_nombre'],'
                  </center>
                  </td>
                  <td>
                  <center>
                  ',$datos[$i]['d_fechaInicio'],'
                  </center>
                  </td>
                  <td>
                  <center>
                  ',$datos[$i]['d_fechaFinal'],'
                  </center>
                  </td>
                  <td>
                  <center>';
                  ?>
                  {!! Form::open(['url' => 'modificarEventos']) !!}
                  <button  class="btn btn-info" name="id" id="id" <?php  echo "value=".$datos[$i]['i_pk_id'];?>>Modificar</button>
                  {!! Form::close() !!}
                  <?php 
                  echo '
                  </center>
                  </td>
                  <td>
                  <center>';
                  ?>
                  {!! Form::open(['url' => 'eliminarEventos']) !!}
                  <button  class="btn btn-danger" name="id" id="id" <?php  echo "value=".$datos[$i]['i_pk_id'];?>><?php echo $mensaje;  ?></button>
                  {!! Form::close() !!}
                  <?php 
                  echo '
                  </center>
                  </td>
                  </tr>

                  </div>';
               }
            ?>

        </tbody>
    </table>
    <br>
    
</div>
@stop