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
      <input type="numeric" class="form-control" placeholder="Ingresa la cédula" id="cedula" name="cedula" required> 
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
@stop
