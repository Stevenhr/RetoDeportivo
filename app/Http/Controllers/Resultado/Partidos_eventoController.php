<?php

namespace App\Http\Controllers\Resultado;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partidos_por_evento;
use App\Evento;
class Partidos_eventoController extends Controller{
  public function partidosEvento(){
    $tbla_partidos=Partidos_por_evento::all();
    $Eventos=Evento::all();
    foreach ($tbla_partidos as  $value) {
          $datos[]=[
          'Id'=>$value['i_id_pk'],  
          'Evento'=>$value['i_fk_id_evento'],
          'Equipo1'=>$value['i_fk_id_equipo1'],
          'Equipo2'=>$value['i_fk_id_equipo2'],
          'Hora'=>$value['t_hora'],
          'Fecha'=>$value['d_fecha'], 
          'Lugar'=>$value['vc_lugar'],
          'Estadio'=>$value['vc_estadio'],
          'Estado'=>$value['i_estado_terminado'],
          ];
    }
    foreach ($Eventos as $Evento) {
      $Eventos[]=[
          'Id'=>$Evento['i_pk_id'],  
          'Evento'=>$Evento['vc_nombre'],
          ];
    }

      $datos2=[
        'datosPartidos'=>$datos,
        'Eventos'=>$Eventos,
      ];
      //dd($datos2);
      return view('Resultados/PartidosPorEventos',$datos2);
  }
/*Registrar partidos*/
public function registroPartidos(Request $data){
        $Evento=$data->Evento;
        $Equipo1=$data->Equipo1;
        $Equipo2=$data->Equipo2;
        $Hora=$data->Hora;
        $Fecha=$data->Fecha;
        $Ciudad=$data->Ciudad;
        $Estadio=$data->Estadio;
        $Estado=$data->Estado;
       $Partidos=new Partidos_por_evento;
        $Partidos->i_fk_id_evento=$Evento;
        $Partidos->i_fk_id_equipo1=$Equipo1;
        $Partidos->i_fk_id_equipo2=$Equipo2;
        $Partidos->t_hora=$Hora;
        $Partidos->d_fecha=$Fecha;
        $Partidos->vc_lugar=$Ciudad;
        $Partidos->vc_estadio=$Estadio;
        $Partidos->i_estado_terminado=$Estado;
        $Partidos->save();
        return $this->partidosEvento();
   }
/*Modificar partidos*/
public function modificarPartidos(Request $data){
        $idUsuario=$data->idUsuario;
        $Evento=$data->Evento;
        $Equipo1=$data->Equipo1;
        $Equipo2=$data->Equipo2;
        $Hora=$data->Hora;
        $Fecha=$data->Fecha;
        $Ciudad=$data->Ciudad;
        $Estadio=$data->Estadio;
        $Estado=$data->Estado;

       $Partidos=new Partidos_por_evento;
       $Partidos=$Partidos::find($idUsuario);
        $Partidos->i_fk_id_evento=$Evento;
        $Partidos->i_fk_id_equipo1=$Equipo1;
        $Partidos->i_fk_id_equipo2=$Equipo2;
        $Partidos->t_hora=$Hora;
        $Partidos->d_fecha=$Fecha;
        $Partidos->vc_lugar=$Ciudad;
        $Partidos->vc_estadio=$Estadio;
        $Partidos->i_estado_terminado=$Estado;
        $Partidos->save();
        return $this->partidosEvento();
   }
   /*Eliminar partidos*/
public function eliminarPartidos(Request $data){
      $idUsuario=$data->idUsuario;
      $Partidos=new Partidos_por_evento;
      $Partidos=$Partidos::find($idUsuario);
      $Partidos->delete();
      return $this->partidosEvento();
   }
}