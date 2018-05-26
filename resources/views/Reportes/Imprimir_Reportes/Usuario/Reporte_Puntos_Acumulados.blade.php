@extends('Reportes/usuario')                              

@section('contenido')

<br>
  <center><h1>Reporte Mis Puntos Acumulados</h1></center><br>
<div class="container border border-success">
<br>

    <table id="table_id" class="table table-striped table-bordered nowrap border-dark" width="100%">
        <thead class="table-primary">
            <tr>
                <th><center>Id</center></th>
                <th><center>Id Partido</center></th>
                <th><center>Id Personas</center></th>
                <th><center>Id Organizacion</center></th>
                <th><center>Resultado Equipo 1</center></th>
                <th><center>Resultado Equipo 2</center></th>
              
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