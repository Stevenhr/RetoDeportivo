@extends('master') 
@section('content') 
 <div class="container-fluid" style="background-color: #3498DB  ;color: white;">
 <center><h1 style="padding-top: 20px;padding-bottom: 20px">Creación de Organizaciones</h1> </center>
</div>
@yield('error')

  {!! Form::open(['url' => 'agregarOrganizacion','files' => true,'enctype' => 'multipart/form-data', 'method' => 'POST']) !!} 
  {!! csrf_field() !!} 
  <center>
    <fieldset> 
    
    <div class="form-group"> 
      <label class="col-form-label" for="nombre"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold;">Nombre:</label> <br>
      <input type="text" class="form-control" placeholder="Nombre de la empresa o entidad" id="nombre" name="nombre" required style="padding-left: 100px;padding-right: 100px"> <br>
    </div> 
    <br>
      <div class="form-group"> 
      <label class="col-form-label" for="nit"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold;">Nit:</label> <br>
      <input type="numeric" class="form-control" placeholder="Ingresa el nit" id="nit" name="nit" required style="padding-left: 100px;padding-right: 100px"> <br>
    </div> 
    <br>
    <div class="form-group"> 
      <label class="col-form-label" for="direccion"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold;">Dirección:</label> <br>
      <input type="text" class="form-control" placeholder="Ubicación de la entidad" id="direccion" name="direccion" required style="padding-left: 100px;padding-right: 100px"><br> 
    </div> 
    <br>
    <div class="form-group"> 
      <label class="col-form-label" for="telefono"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold;">Teléfono:</label> <br>
      <input type="numeric" class="form-control" placeholder="Número de contacto" id="telefono" name="telefono" required style="padding-left: 100px;padding-right: 100px"> <br>
    </div> 
    <br>
    <div class="form-group"> 
    <label class="col-form-label" for="correo"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold;">Correo electrónico:</label> <br>
      <input type="email" class="form-control" placeholder="correo donde nos pondremos en contacto contigo" id="correo" name="correo" required style="padding-left: 100px;padding-right: 100px"> <br>
    </div> 
    <br>
      <div class="form-group"> 
        <label for="imagen"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold;">Logo de la organización:</label><br> 
        <input type="file" class="form-control-file" id="imagen" name="imagen" aria-describedby="fileHelp"> <br>
        <small id="fileHelp" class="form-text text-muted" style="color: red">Insertar una imagen representativa de la organización</small> <br>
      </div>
    <br>
      <div class="form-group"> 
        <label class="col-form-label" for="vInscripcion"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold; ">Valor de la inscripción:</label> <br>
        <input type="numeric" class="form-control" placeholder="Monto a pagar para participar" id="vInscripcion" name="vInscripcion" required style="padding-left: 100px;padding-right: 100px"> <br>
      </div>
    <br>
    <div class="form-group">
    <label class="col-form-label" for="nombreEvtSelect"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold;">Elige el evento en el que deseas participar:</label>   <br> 
    <select class="form-control" name="nombreEvtSelect" style="padding-left: 100px;padding-right: 100px">
    
      <?php foreach ($arrayEventos as $key => $evento) { ?>
        
      <option>{{$evento['vc_nombre']}}</option>
     <?php } ?>
    
    </select>
    </div>
    <br>
      <button type="submit" class="btn btn-outline-info" style="padding-left: 100px;padding-right: 100px">Submit</button> 
      </fieldset> 
      {!! Form::close() !!} 
  </center> 
@stop