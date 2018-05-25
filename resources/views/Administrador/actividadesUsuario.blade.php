@extends('master') 
@section('content')
  <br><br><br>
  <div class="container border border-success">
  <br>
    <table id="table_id" width="100%">
        <thead class="table-primary">
            <tr>
                <th><center>Id</center></th>
                <th><center>Nombre</center></th>
                <th><center>Descripción</center></th>
                <th><center>Estado</center></th>
                <th><center>Modulo Perteneciente</center></th>
                <th><center>Habilitar/Deshabilitar</center></th>
            </tr>
        </thead>
        <tbody>
            <?php
              $id = $_GET['id'];
              use App\tbl_actividades;
              use App\tbl_modulos;
              use Illuminate\Database\Eloquent\Collection;
               $loginActual=tbl_actividades::find($id);
               if($loginActual){
               $datos=$loginActual;
               $tope = $loginActual->count();
               for($i=0;$i<$tope;$i++){
                $modulo = tbl_modulos::find($datos['tbl_modulos_i_fk_id']);
                if($datos['i_estado']==0){
                  $mensaje = "Habilitar";
                }else{
                  $mensaje = "Deshabilitar";
                }
                  echo '<tr>
                  <td>
                  <center>
                  ',$datos['i_pk_id'],'
                  </center>
                  </td>
                  <td>
                  <center>
                  ',$datos['vc_nombre'],'
                  </center>
                  </td>
                  <td>
                  <center>
                  ',$datos['vc_descripcion'],'
                  </center>
                  </td>
                  <td>
                  <center>
                  ',$datos['i_estado'],'
                  </center>
                  </td>
                  <td>
                  <center>
                  ',$modulo['vc_nombre'],'
                  </center>
                  </td>
                  <td>
                  <center>';
                  ?>
                  {!! Form::open(['url' => 'deshabilitar']) !!}
                  <button  class="btn btn-danger" name="id" id="id" <?php  echo "value=".$datos[$i]['i_pk_id'];?>><?php echo $mensaje;  ?></button>
                  {!! Form::close() !!}
                  <?php 
                  echo '
                  </a>
                  </center>
                  </td>
                  </tr>

                  </div>';
               }
             }
            ?>

        </tbody>
  </table>
</div>
  <br>
  <center><a href="personas"><button  class="btn btn-info">Volver</button></a></center>
@stop
