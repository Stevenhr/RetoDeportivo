@extends('master') 
@section('content') 
 
<center><h1>Creación de Organizaciones</h1> 
  {!! Form::open(['url' => 'agregarOrganizacion','files' => true,'enctype' => 'multipart/form-data', 'method' => 'POST']) !!} 
  {!! csrf_field() !!} 
    <fieldset> 
    
    <div class="form-group"> 
      <label class="col-form-label" for="nombre">Nombre</label> 
      <input type="text" class="form-control" placeholder="Nombre de la empresa o entidad" id="nombre" name="nombre" required> 
    </div> 

      <div class="form-group"> 
      <label class="col-form-label" for="nit">Nit</label> 
      <input type="numeric" class="form-control" placeholder="Ingresa el nit" id="nit" name="nit" required> 
    </div> 
    
    <div class="form-group"> 
      <label class="col-form-label" for="direccion">Dirección</label> 
      <input type="text" class="form-control" placeholder="Ubicación de la entidad" id="direccion" name="direccion" required> 
    </div> 
    
    <div class="form-group"> 
      <label class="col-form-label" for="telefono">Teléfono</label> 
      <input type="numeric" class="form-control" placeholder="Número de contacto" id="telefono" name="telefono" required> 
    </div> 
    
    <div class="form-group"> 
    <label class="col-form-label" for="correo">Correo electrónico</label> 
      <input type="email" class="form-control" placeholder="correo donde nos pondremos en contacto contigo" id="correo" name="correo" required> 
    </div> 
      
      <div class="form-group"> 
        <label for="imagen">Logo de la organización</label> 
        <input type="file" class="form-control-file" id="imagen" name="imagen" aria-describedby="fileHelp"> 
        <small id="fileHelp" class="form-text text-muted">Insertar una imagen representativa de la organización</small> 
      </div>
      
      <div class="form-group"> 
        <label class="col-form-label" for="vInscripcion">Valor de la inscripción</label> 
        <input type="numeric" class="form-control" placeholder="Monto a pagar para participar" id="vInscripcion" name="vInscripcion" required> 
      </div>
    
    <div class="form-group">
    <label class="col-form-label" for="nombreEvtSelect">Elige el evento en el que deseas participar</label>    
    <select class="form-control" name="nombreEvtSelect">
    
      <?php foreach ($arrayEventos as $key => $evento) { ?>
        
      <option>{{$evento['vc_nombre']}}</option>
     <?php } ?>
    
    </select>
    </div>

      <button type="submit" class="btn btn-primary">Submit</button> 
      </fieldset> 
      {!! Form::close() !!} 
  </center> 
@stop
