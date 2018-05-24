@extends('master') 
@section('content') 

 <div class="container col-6">
  
<center><h1>Creación de Actividades</h1> 
  {!! Form::open(['url' => 'agregarActividad','files' => true,'enctype' => 'multipart/form-data', 'method' => 'POST']) !!} 
  {!! csrf_field() !!} 
    <fieldset> 
    
    <div class="form-group">
    <label class="col-form-label" for="nombModulo">Módulo al que pertenece la actividad</label>    
    <select class="form-control" name="nombModulo">
    
      <?php foreach ($arrayModulos as $key => $modulo) { ?>
        
      <option>{{$modulo['vc_nombre']}}</option>
     <?php } ?>
    
    </select>
    </div>


    <div class="form-group"> 
      <label class="col-form-label" for="nombre">Nombre</label> 
      <input type="text" class="form-control" placeholder="Ingrese el nombre de la actividad" id="nombre" name="nombre" required> 
    </div> 
     
    
    <div class="form-group"> 
      <label class="col-form-label" for="descripcion">Descripción</label> 
      <input type="text" class="form-control" placeholder="Describe brevemente la actividad" id="descripcion" name="descripcion" required> 
    </div>

  <div class="form-group">
    <label class="col-form-label" for="estado">Estado inicial de la actividad</label>    
    <select class="form-control" name="estado">
        
    <option>Habilitada</option>
    <option>Deshabilitada</option>
    </select>
  </div>
    
      
      <button type="submit" class="btn btn-primary">Submit</button> 
      </fieldset> 
      {!! Form::close() !!} 
  </center> 
  </div>
  <br><br><br>



    <div class="container border border-success">

  <br>
    <table id="table_id" class="table table-striped table-bordered nowrap border-dark" width="100%">
        <thead class="table-primary">
            <tr>
                <th><center>Id</center></th>
                <th><center>Nombre</center></th>
                <th><center>Estado</center></th>
                <th><center>Habilitar/Deshabilitar</center></th>
            </tr>
        </thead>
        <tbody>
            <?php
              use App\tbl_modulos;
              use Illuminate\Database\Eloquent\Collection;
               $loginActual=tbl_modulos::All();
               $datos=$loginActual;
               for($i=0;$i<sizeof($datos);$i++){
                if($datos[$i]['i_estado']==0){
                  $mensaje = "Habilitar";
                }else{
                  $mensaje = "Deshabilitar";
                }
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
                  ',$datos[$i]['i_estado'],'
                  </center>
                  </td>
                  <td>
                  <center>';
                  ?>
                  {!! Form::open(['url' => 'deshabilitar']) !!}
                  <button  class="btn btn-danger" name="id" id="id" <?php  echo "value=".$datos[$i]['i_pk_id'];?>><?php echo $mensaje;  ?></button>
                  {!! Form::close() !!}
                  <?php 
                  echo '
                  </a>
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
