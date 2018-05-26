@extends('master') 
@section('content') 
 <div class="container-fluid" style="background-color: #3498DB  ;color: white;">
 <center><h1 style="padding-top: 20px;padding-bottom: 20px">Creación de Organizaciones</h1> </center>
</div>
@yield('error')

  {!! Form::open(['url' => 'editarOrganizaciones','files' => true,'enctype' => 'multipart/form-data', 'method' => 'POST']) !!} 
  {!! csrf_field() !!} 
  <center>
    <fieldset> 
    
    <div class="form-group"> 
      <label class="col-form-label" for="nombre"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold;">Nombre:</label> <br>
      <input type="text" class="form-control" placeholder="Nombre de la empresa o entidad" id="nombre" name="nombre" required style="padding-left: 100px;padding-right: 100px" value="<?php echo $arrayEventos['vc_nombre'];?>"> <br>
    </div> 
    <br>
      <div class="form-group"> 
      <label class="col-form-label" for="nit"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold;">Nit:</label> <br>
      <input type="numeric" class="form-control" placeholder="Ingresa el nit" id="nit" name="nit" required style="padding-left: 100px;padding-right: 100px" value="<?php echo $arrayEventos['i_nit'];?>"> <br>
    </div> 
    <br>
    <div class="form-group"> 
      <label class="col-form-label" for="direccion"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold;">Dirección:</label> <br>
      <input type="text" class="form-control" placeholder="Ubicación de la entidad" id="direccion" name="direccion" required style="padding-left: 100px;padding-right: 100px" value="<?php echo $arrayEventos['vc_direccion'];?>"><br> 
    </div> 
    <br>
    <div class="form-group"> 
      <label class="col-form-label" for="telefono"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold;">Teléfono:</label> <br>
      <input type="numeric" class="form-control" placeholder="Número de contacto" id="telefono" name="telefono" required style="padding-left: 100px;padding-right: 100px" value="<?php echo $arrayEventos['i_telefono'];?>"> <br>
    </div> 
    <br>
    <div class="form-group"> 
    <label class="col-form-label" for="correo"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold;">Correo electrónico:</label> <br>
      <input type="email" class="form-control" placeholder="correo donde nos pondremos en contacto contigo" id="correo" name="correo" required style="padding-left: 100px;padding-right: 100px" value="<?php echo $arrayEventos['vc_correo'];?>"> <br>
    </div>
    <br>
      <div class="form-group"> 
        <label class="col-form-label" for="vInscripcion"  style="color:  #2E86C1  ;font-family:arial;font-weight: bold; ">Valor de la inscripción:</label> <br>
        <input type="numeric" class="form-control" placeholder="Monto a pagar para participar" id="vInscripcion" name="vInscripcion" required style="padding-left: 100px;padding-right: 100px" value="<?php echo $arrayEventos['i_valorInscripcion'];?>"> <br>
      </div>
    <br>
      <button type="submit" class="btn btn-outline-info" style="padding-left: 100px;padding-right: 100px"  value="<?php echo $arrayEventos['i_pk_id'];?>" name="id" id="id">Submit</button> 
      </fieldset> 
      {!! Form::close() !!} 
  </center> 
@stop
