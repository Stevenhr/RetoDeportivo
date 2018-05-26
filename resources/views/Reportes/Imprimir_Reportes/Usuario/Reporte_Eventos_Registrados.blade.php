@extends('Reportes/usuario')                              

@section('contenido')

<br>
  <center><h1>Reporte Mis  Eventos  Registrados</h1></center><br>
<div class="container border border-success">
<br>

    <table id="table_id" class="table table-striped table-bordered nowrap border-dark" width="100%">
        <thead class="table-primary">
            <tr>
                 <th><center>Id</center></th>
                <th><center>Nombre Evento</center></th>
                <th><center>Fecha Inicio</center></th>
                <th><center>FechaFinal</center></th>
                <th><center>Logo</center></th>
               
            </tr>
        </thead>
        <tbody>
            <?php
                 if( isset($codigo)){

                       foreach ($codigo as $key => $value) {
                       		echo $value;
                       }
               
               }
            ?>

        </tbody>
    </table>
    <br>
    
</div>


@endsection