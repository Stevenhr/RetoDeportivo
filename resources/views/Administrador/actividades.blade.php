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
@stop
