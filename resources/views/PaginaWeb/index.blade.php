<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/united/bootstrap.min.css" rel="stylesheet" integrity="sha384-9nkB73MkhCaHgW6bdX2EbWnwXl8FUs1fTnR1UKUuic9Zqs/3u9VunCE/0hleKeUs" crossorigin="anonymous">
  <style type="text/css">
      
      

  </style>
</head>
<body>

  <!--Cuerpo de Pagina-->
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">SRD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Como Funciona</a>
          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
            <a class="dropdown-item" href="#">Reglas del Juego</a>
            <a class="dropdown-item" href="#">Contáctenos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separador</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#">Reglas del Juego</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contáctenos</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-success my-2 my-sm-0" data-toggle="modal" data-target="#modalRegistro">Solicitud de Registro</button>
        &nbsp;&nbsp;
        <button class="btn btn-success my-2 my-sm-0" data-toggle="modal" data-target="#modalInicioSesion">Iniciar Sesión</button>
      </form>
    </div>
  </nav>
</div>

@yield('contenido')

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

          <div class="container">
        <div class="row">
          <div class="col">

              <form>
            <div class="form-group">
              <label for="exampleInputPassword1">Nombres</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombres">
            </div>
          </form>
          </div>
          <div class="col">
            <form>
            <div class="form-group">
              <label for="exampleInputPassword1">Apellidos</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Apellidos">
            </div>
          </form>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form>
            <div class="form-group">
              <label for="exampleInputPassword1">Edad</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Edad">
            </div>
          </form>
          </div>
          <div class="col">
            <form>
            <div class="form-group">
              <label for="exampleInputPassword1">Telefono</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono">
            </div>
          </form>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form>
            <div class="form-group">
              <label for="exampleInputPassword1">Dirección Residencial</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Dirección Residencial">
            </div>
          </form>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form>
            <div class="form-group">
              <label for="exampleInputPassword1">Correo Electronico</label>
              <input type="email" class="form-control" id="exampleInputPassword1" placeholder="nombre@organizacion.tipo">
            </div>
          </form>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
            </div>
          </form>
          </div>
          <div class="col">
            <form>
            <div class="form-group">
              <label for="exampleInputPassword1">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar Contraseña">
            </div>
          </form>
          </div>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Confirmar Registro</label>
        </div>
      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Registrarse</button>
        </div>
      </div>
    </div>
  </div>


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
          
            <div class="container">
          <div class="row">
            <div class="col">
            <div class="form-group">
              <label for="exampleInputPassword1">Correo Electronico</label>
              <input type="email" class="form-control" id="exampleInputPassword1" name="correoElectronico2" placeholder="nombre@organizacion.tipo">
            </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col">
              
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña2" placeholder="Contraseña">
            </div>
            
            </div>
            
          </div>
          
      </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
          
        </div>
      </div>
    </div>
  </div>

<!--Codigo Js Bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>