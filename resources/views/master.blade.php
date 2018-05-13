<!DOCTYPE html>

<html lang="es">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        
          <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="{{ asset('/css/jquery-ui.css') }}" media="screen">    
          <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" media="screen">    
          <link rel="stylesheet" href="{{ asset('/css/main.css') }}" media="screen">   
         
     
              

          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   
    

      <title>Reto deportivo</title>
  </head>

  <body>
       <!-- Menu Módulo -->
  
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          
              <a class="navbar-brand" href="#">SRD</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
               
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Modulo Administrador</a>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                      <a class="dropdown-item" href="#">Actividad 1</a>
                      <a class="dropdown-item" href="#">Actividad 2</a>
                      <a class="dropdown-item" href="#">Actividad 3</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separador</a>
                    </div>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Palmare Deportivo</a>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                      <a class="dropdown-item" href="#">Actividad 1</a>
                      <a class="dropdown-item" href="#">Actividad 2</a>
                      <a class="dropdown-item" href="#">Actividad 3</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separador</a>
                    </div>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Registro Resultados</a>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                      <a class="dropdown-item" href="{{ url('fixture') }}"> Fixture</a>
                      <a class="dropdown-item" href="#">Actividad 2</a>
                      <a class="dropdown-item" href="#">Actividad 3</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separador</a>
                    </div>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                      <a class="dropdown-item" href="#">Actividad 1</a>
                      <a class="dropdown-item" href="#">Actividad 2</a>
                      <a class="dropdown-item" href="#">Actividad 3</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separador</a>
                    </div>
                  </li>
            
                </ul>

                <ul class="navbar-nav navbar-right">
                  <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank">Cerrar Sesión</a>
                  </li>
                </ul>
               

              </div>
          
        </nav>
      </div>
       



      <!-- FIN Menu Módulo -->
        
      <!-- Contenedor información módulo -->
      </br></br>
      <div class="container">
          <div class="page-header" id="banner">
            <div class="row">
              <div class="col-lg-8 col-md-7 col-sm-6">
                <h1>SISTEMA RETO DEPORTIVO
                </h1>
                <p class="lead"><h1>Retos deportivos 2018</h1></p>
              </div>
              <div class="col-lg-4 col-md-5 col-sm-6">
                 <div align="right"> 
                    <img src="public/Img/IDRD.JPG" width="50%" heigth="40%"/>
                 </div>                    
              </div>
            </div>
          </div>        
      </div>
      <!-- FIN Contenedor información módulo -->

      <!-- Contenedor panel principal -->
      <div class="container">
          @yield('content')

      </div>        
      <!-- FIN Contenedor panel principal -->
  </body>

</html>





