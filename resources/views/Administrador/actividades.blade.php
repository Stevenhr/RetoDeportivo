@extends('master') 
@section('content') 

 <div class="container col-6"  >
  <div class="container-fluid" style="background-color: #58D68D;color: white;">
 <center><h1 style="padding-top: 20px;padding-bottom: 20px">Creación de Actividades</h1> </center>
</div>
@yield('error')
  {!! Form::open(['url' => 'agregarActividad','files' => true,'enctype' => 'multipart/form-data', 'method' => 'POST']) !!} 
  {!! csrf_field() !!} 
    <fieldset> 
    <center>
    <div class="form-group" style="">
    <label class="col-form-label" for="nombModulo"  style="color: #196F3D;font-family:arial;font-weight: bold;">Módulo al que pertenece la actividad</label>  
    <br>  
    <select class="form-control" name="nombModulo"  required="" style="padding-left: 100px;padding-right: 100px">
    
      <?php foreach ($arrayModulos as $key => $modulo) { ?>
        
      <option>{{$modulo['vc_nombre']}}</option>
     <?php } ?>
    
    </select>
    </div>
    </center>
    <br>
    <center>
    <div class="form-group"> 
      <label class="col-form-label" for="nombre"  style="color: #196F3D;font-family:arial;font-weight: bold;">Nombre Actividad</label><br>
      <input type="text" class="form-control" placeholder="Ingrese el nombre de la actividad" id="nombre" name="nombre" required style="padding-left: 100px;padding-right: 100px"> 
    </div> 
     <br>
    </center>
    <center>
    <div class="form-group"> 
      <label class="col-form-label" for="descripcion"  style="color: #196F3D;font-family:arial;font-weight: bold;">Descripción Actividad</label> <br>
      <input type="text" class="form-control" placeholder="Describe brevemente la actividad" id="descripcion" name="descripcion" required style="padding-left: 100px;padding-right: 100px"> 
    </div>
    <br>
      </center>
      <center>
  <div class="form-group">
    <label class="col-form-label" for="estado"  style="color: #196F3D;font-family:arial;font-weight: bold;">Estado inicial de la actividad</label> <br>
    <select class="form-control" required="" name="estado" style="padding-left: 100px;padding-right: 100px">
        
    <option>Habilitada</option>
    <option>Deshabilitada</option>
    </select>
  </div>
  <br>
</center>
    
      <center>
      <button type="submit" class="btn btn-outline-success" style="padding-left: 100px;padding-right: 100px">Submit</button> 
      </fieldset> 
    </center>
      {!! Form::close() !!} 
 
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
