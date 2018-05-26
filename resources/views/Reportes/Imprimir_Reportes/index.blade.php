@extends('master')                              

@section('content') 
<!DOCTYPE html>
<html>
<head>
  
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['PERSONAS',     11],
          ['Eat',      2],
          ['Commute',  11],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'Titulo Prueba'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
</head>
<body>
  <center>
    <br>
    <h1>EJEMPLO TABLAS</h1><br>
    {!! Form::open(['url' => 'excel']) !!}
    <button class="btn btn-success" type="submit">Generar Excel</button>
    {!! Form::close() !!}
    <br>
  </center>
  
  <div class="container border border-success">

  <br>
    <table id="table_id" class="table table-striped table-bordered nowrap border-dark" width="100%">
        <thead class="table-primary">
            <tr>
                <th><center>Id</center></th>
                <th><center>Usuario</center></th>
                <th><center>Contraseña</center></th>
                <th><center>Opciones</center></th>
            </tr>
        </thead>
        <tbody>
            <?php
                 
               $loginActual=Session::get('prueba');
               $datos=$loginActual;
               for($i=0;$i<sizeof($datos);$i++){
                  echo '<tr><td><center>',$datos[$i]['tbl_personas_i_pk_id'],'</center></td><td><center>',$datos[$i]['vc_usuario'],'</center></td><td><center>',$datos[$i]['vc_contrasena'],'</center></td><td><center><button  class="btn btn-success" data-toggle="modal" data-target="#modeloVista'.$datos[$i]['tbl_personas_i_pk_id'].'">Mostrar</button></center></td></tr>

                  <div class="modal fade" id="modeloVista'.$datos[$i]['tbl_personas_i_pk_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <label for="exampleInputPassword1"><b>ID: </b>'.$datos[$i]['tbl_personas_i_pk_id'].'</label>
                            </div>
                            </div>
                            
                          </div>
                          <div class="row">
                            <div class="col">
                            <div class="form-group">
                              <label for="exampleInputPassword1"><b>Usuario: </b>'.$datos[$i]['vc_usuario'].'</label>
                            </div>
                            </div>
                            
                          </div>
                          <div class="row">
                            <div class="col">
                            <div class="form-group">
                              <label for="exampleInputPassword1"><b>Contraseña: </b>'.$datos[$i]['vc_contrasena'].'</label>
                            </div>
                            </div>
                            
                          </div>
                          
                      </div>
                        
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                    </div>
                  </div>';
               }
            ?>

        </tbody>
    </table>
    <br>
    
</div>
<br>
<div id="piechart" style="width: 900px; height: 500px;"></div>




@endsection