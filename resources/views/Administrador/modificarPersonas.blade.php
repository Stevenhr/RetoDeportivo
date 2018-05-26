@extends('master') 
@section('content') 


    <fieldset> 
<div class="container col-6">
  <div class="container-fluid" style="background-color: #E67E22  ;color: white;">
 <center><h1 style="padding-top: 20px;padding-bottom: 20px">Creación de Personas</h1> </center>
</div>
@yield('error')
  {!! Form::open(['url' => 'editarPersonas','files' => true,'enctype' => 'multipart/form-data', 'method' => 'POST']) !!} 
  {!! csrf_field() !!}
  <center> 
    
    <div class="form-group"> 
      <label class="col-form-label" for="nombre" style="color:   #D35400   ;font-family:arial;font-weight: bold;">Nombre</label><br>
      <input type="text" class="form-control" placeholder="Ingrese el nombre de la persona" id="nombre" name="nombre" required style="padding-left: 100px;padding-right: 100px" value="<?php echo $arrayGente['vc_nombre'];?>"> <br>
    </div> 
    <br>
    
    <div class="form-group"> 
      <label class="col-form-label" for="apellido" style="color:   #D35400   ;font-family:arial;font-weight: bold;">Apellido</label> <br>
      <input type="text" class="form-control" placeholder="Ingrese el apellido de la persona" id="apellido" name="apellido" required style="padding-left: 100px;padding-right: 100px" value="<?php echo $arrayGente['vc_apellido'];?>"> <br>
    </div>
    <br>
    <div class="form-group">
    <label class="col-form-label" for="nombreTipoDoc" style="color:  #D35400  ;font-family:arial;font-weight: bold;">Tipo de documento de identificación</label>    <br>
    <select class="form-control" name="nombreTipoDoc" style="padding-left: 100px;padding-right: 100px"><br>
    
      <?php foreach ($arrayDocs as $key => $documento) { ?>
        
      <option>{{$documento['vc_nombre']}}</option>
     <?php } ?>
    
    </select>
    </div>
    <br>
    <div class="form-group"> 
      <label class="col-form-label" for="cedula" style="color:  #D35400  ;font-family:arial;font-weight: bold;">Número de identificación</label> <br>
      <input type="text" class="form-control" placeholder="Ingresa tu número de identificación" id="cedula" name="cedula" required style="padding-left: 100px;padding-right: 100px" value="<?php echo $arrayGente['vc_cedula'];?>"> <br>
    </div> 
    <br>

    <div class="form-group">
    <label class="col-form-label" for="nombreTipoSexo" style="color:  #D35400  ;font-family:arial;font-weight: bold;">Sexo</label>    <br>
    <select class="form-control" name="nombreTipoSexo" style="padding-left: 100px;padding-right: 100px"><br>
    
      <?php foreach ($arraySexo as $key => $sexo) { ?>
        
      <option>{{$sexo['vc_sexo']}}</option>
     <?php } ?>
    
    </select>
    </div>
    <br>
    <div class="form-group"> 
      <label class="col-form-label" for="telefono" style="color:  #D35400  ;font-family:arial;font-weight: bold;">Teléfono</label> <br>
      <input type="numeric" class="form-control" placeholder="Número de contacto" id="telefono" name="telefono" required style="padding-left: 100px;padding-right: 100px" value="<?php echo $arrayGente['i_telefono'];?>"> <br>
    </div> 
    <br>
    <div class="form-group"> 
      <label class="col-form-label" for="celular" style="color:  #D35400  ;font-family:arial;font-weight: bold;">Celular</label><br> 
      <input type="numeric" class="form-control" placeholder="Número de celular" id="celular" name="celular" required style="padding-left: 100px;padding-right: 100px" value="<?php echo $arrayGente['i_celular'];?>"> <br>
    </div> 
        <br>
    <div class="form-group"> 
    <label class="col-form-label" for="correo" style="color:  #D35400  ;font-family:arial;font-weight: bold;">Correo electrónico</label> <br>
      <input type="email" class="form-control" placeholder="correo donde nos pondremos en contacto contigo" id="correo" name="correo" required style="padding-left: 100px;padding-right: 100px" value="<?php echo $arrayGente['vc_correo'];?>"> <br>
    </div> 
      <br>
      <button type="submit" class="btn btn-outline-primary" style="padding-left: 100px;padding-right: 100px" value="<?php echo $arrayGente['i_pk_id'];?>" name="id" id="id">Submit</button> 
      </fieldset> 
      {!! Form::close() !!} 
  </center> 
  </div>
@stop
