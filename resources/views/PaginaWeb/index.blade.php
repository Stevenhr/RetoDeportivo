<!DOCTYPE html>
<html>
<head>
  <!-- Titulo de pestaña la Pagina -->
  <title>La Polla Del Deporte</title>
  <!-- Importaciones de referencia -->
    <!-- Codigo CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/united/bootstrap.min.css" rel="stylesheet" integrity="sha384-9nkB73MkhCaHgW6bdX2EbWnwXl8FUs1fTnR1UKUuic9Zqs/3u9VunCE/0hleKeUs" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
</head>
<body>

<!-- Menú de Pagina -->
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="inicio">SRD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="inicio">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="como_funciona">Como Funciona</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="reglas_del_juego">Reglas del Juego</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contactanos">Contáctenos</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-success my-2 my-sm-0 text-white" data-toggle="modal" data-target="#modalRegistro">Solicitud de Registro</a>
        &nbsp;&nbsp;
        <a class="btn btn-success my-2 my-sm-0 text-white" data-toggle="modal" data-target="#modalInicioSesion">Iniciar Sesión</a>
      </form>
    </div>
  </nav>
</div>

<!-- Mensajes de Error en el Modal -->
<div class="container-fluid">
  @if($errors->any())
    <br>
    <div class="alert alert-dismissible alert-danger">
      <strong>Oh!, Parece que has ingresado datos incorrectos!</strong>
      @foreach($errors->all() as $error)
      <a class="alert-link"><div>* {{$error}}</div></a>
      @endforeach
    </div>
  @endif
  <br>
</div>

<!-- Contenido del cuerpo de la Pagina -->

@yield('contenido')

<!-- Modales -->
  <!--Modal Solicitud de Registro -->
  <div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {!! Form::open(['url' => 'solicitud_registro']) !!}
            {{ csrf_field() }}
            <div class="container">
          <div class="row">
            <div class="col">
            <div class="form-group">
              <label for="exampleInputPassword1"><a class="text-danger">*</a>Nombres</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="nombres" placeholder="Nombres">
            </div>
            </div>
            <div class="col">
            <div class="form-group">
              <label for="exampleInputPassword1"><a class="text-danger">*</a>Apellidos</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="apellidos" placeholder="Apellidos">
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              
            <div class="form-group">
              <label for="exampleInputPassword1"><a class="text-danger">*</a>Edad</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="edad" placeholder="Edad" min="10" max="90">
            </div>
            
            </div>
            <div class="col">
              
            <div class="form-group">
              <label for="exampleInputPassword1"><a class="text-danger">*</a>Telefono</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="telefono" placeholder="Telefono">
            </div>
            
            </div>
          </div>
          <div class="row">
            <div class="col">
              
            <div class="form-group">
              <label for="exampleInputPassword1"><a class="text-danger">*</a>Dirección Residencial</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="direccionResidencial" placeholder="Dirección Residencial">
            </div>
            
            </div>
          </div>
          <div class="row">
            <div class="col">
              
            <div class="form-group">
              <label for="exampleInputPassword1"><a class="text-danger">*</a>Correo Electronico</label>
              <input type="email" class="form-control" id="exampleInputPassword1" name="correoElectronico" placeholder="nombre@organizacion.tipo">
            </div>
            
            </div>
          </div>
          <div class="row">
            <div class="col">
              
            <div class="form-group">
              <label for="exampleInputPassword1"><a class="text-danger">*</a>Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña" placeholder="Contraseña">
            </div>
            
            </div>
           <div class="col">
              
            <div class="form-group">
              <label for="exampleInputPassword1"><a class="text-danger">*</a>Confirmar Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="confirmarContraseña" placeholder="Confirmar Contraseña">
            </div>
      
             </div>
         </div>
        /<a class="text-danger">*</a>Recuerde que todos los campos del registro son obligatorios.<a class="text-danger">*</a>/
      </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Registrarse</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Inicio de Sesión -->
  <div class="modal fade" id="modalInicioSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Inicio Sesión</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {!! Form::open(['url' => 'inicio_de_sesion']) !!}
          {{ csrf_field() }}
            <div class="container">
          <div class="row">
            <div class="col">
            <div class="form-group">
              <label for="exampleInputPassword1">Usuario</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="usuario" placeholder="ejemplo123">
            </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col">
              
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña" placeholder="Contraseña">
            </div>
            
            </div>
            
          </div>
          
      </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>

<!--Codigo Js Bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
  
  $(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>

</body>
</html>