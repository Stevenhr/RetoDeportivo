@extends('master') 
@section('content') 

 <div class="container col-6">
  
<center><h1>Creación de personas</h1> 
  {!! Form::open(['url' => 'agregarPersona','files' => true,'enctype' => 'multipart/form-data', 'method' => 'POST']) !!} 
  {!! csrf_field() !!} 
    <fieldset> 
    
    <div class="form-group"> 
      <label class="col-form-label" for="nombre">Nombre</label> 
      <input type="text" class="form-control" placeholder="Ingrese el nombre de la persona" id="nombre" name="nombre" required> 
    </div> 
     
    
    <div class="form-group"> 
      <label class="col-form-label" for="apellido">Apellido</label> 
      <input type="text" class="form-control" placeholder="Ingrese el apellido de la persona" id="apellido" name="apellido" required> 
    </div>

    <div class="form-group">
    <label class="col-form-label" for="nombreTipoDoc">Tipo de documento de identificación</label>    
    <select class="form-control" name="nombreTipoDoc">
    
      <?php foreach ($arrayDocs as $key => $documento) { ?>
        
      <option>{{$documento['vc_nombre']}}</option>
     <?php } ?>
    
    </select>
    </div>
    
    <div class="form-group"> 
      <label class="col-form-label" for="cedula">Número de identificación</label> 
      <input type="text" class="form-control" placeholder="Ingresa tu número de identificación" id="cedula" name="cedula" required> 
    </div> 
    

    <div class="form-group">
    <label class="col-form-label" for="nombreTipoSexo">Sexo</label>    
    <select class="form-control" name="nombreTipoSexo">
    
      <?php foreach ($arraySexo as $key => $sexo) { ?>
        
      <option>{{$sexo['vc_sexo']}}</option>
     <?php } ?>
    
    </select>
    </div>

    <div class="form-group"> 
      <label class="col-form-label" for="telefono">Teléfono</label> 
      <input type="numeric" class="form-control" placeholder="Número de contacto" id="telefono" name="telefono" required> 
    </div> 
    
    <div class="form-group"> 
      <label class="col-form-label" for="celular">Celular</label> 
      <input type="numeric" class="form-control" placeholder="Número de celular" id="celular" name="celular" required> 
    </div> 
        
    <div class="form-group"> 
    <label class="col-form-label" for="correo">Correo electrónico</label> 
      <input type="email" class="form-control" placeholder="correo donde nos pondremos en contacto contigo" id="correo" name="correo" required> 
    </div> 
      
    <div class="form-group">
    <label class="col-form-label" for="nombreOrg">Organización  a la que esta vinculado</label>    
    <select class="form-control" name="nombreOrg">
    
      <?php foreach ($arrayOrg as $key => $organizacion) { ?>
        
      <option>{{$organizacion['vc_nombre']}}</option>
     <?php } ?>
    
    </select>
    </div>
      
      <button type="submit" class="btn btn-primary">Submit</button> 
      </fieldset> 
      {!! Form::close() !!} 
  </center> 
  </div>

  <br><br><br><br>
    <table id="table_id" width="100%">
        <thead class="table-primary">
            <tr>
                <th><center>Id</center></th>
                <th><center>Nombre</center></th>
                <th><center>Apellido</center></th>
                <th><center>Sexo</center></th>
                <th><center>Tipo de Documento</center></th>
                <th><center>Documento</center></th>
                <th><center>Telefono</center></th>
                <th><center>Celular</center></th>
                <th><center>Correo</center></th>
                <th><center>Actividades</center></th>
            </tr>
        </thead>
        <tbody>
            <?php
              use App\usuarios;
              use Illuminate\Database\Eloquent\Collection;
               $loginActual=usuarios::All();
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
                  ',$datos[$i]['vc_apellido'],'
                  </center>
                  </td>
                  <td>
                  <center>
                  ',$datos[$i]['vc_apellido'],'
                  </center>
                  </td>
                  <td>
                  <center>
                  ',$datos[$i]['vc_apellido'],'
                  </center>
                  </td>
                  <td>
                  <center>
                  ',$datos[$i]['vc_cedula'],'
                  </center>
                  </td>
                  <td>
                  <center>
                  ',$datos[$i]['i_telefono'],'
                  </center>
                  </td>
                  <td>
                  <center>
                  ',$datos[$i]['i_celular'],'
                  </center>
                  </td>
                  <td>
                  <center>
                  ',$datos[$i]['vc_correo'],'
                  </center>
                  </td>
                  <td>
                  <center>';
                  ?>
                  <a href="actividadesUsuario<?php  echo "?id=".$datos[$i]['i_pk_id'];?>"><button  class="btn btn-info" name="id" id="id" <?php  echo "value=".$datos[$i]['i_pk_id'];?>>Mostrar</button></a>
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
@stop
