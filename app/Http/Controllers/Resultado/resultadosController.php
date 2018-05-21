<?php

namespace App\Http\Controllers\Resultado;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resultados;
use App\Partidos_por_evento;

class resultadosController extends Controller{
	public function partidosEvento(){
    $tbla_partidos=Partidos_por_evento::all();
    $resultados=Resultados::all();
    for ($i=0; $i <$tbla_partidos->count() ; $i++) { 
		    if ($resultados->find($tbla_partidos[$i]['i_id_pk'])) {
		     }else{
		     	$datos[]=[
          'Id'=>$tbla_partidos[$i]['i_id_pk'],  
          'Evento'=>$tbla_partidos[$i]['i_fk_id_evento'],
          'Equipo1'=>$tbla_partidos[$i]['i_fk_id_equipo1'],
          'Equipo2'=>$tbla_partidos[$i]['i_fk_id_equipo2'],
          'Hora'=>$tbla_partidos[$i]['t_hora'],
          'Fecha'=>$tbla_partidos[$i]['d_fecha'], 
          'Lugar'=>$tbla_partidos[$i]['vc_lugar'],
          'Estadio'=>$tbla_partidos[$i]['vc_estadio'],
          'Estado'=>$tbla_partidos[$i]['i_estado_terminado'],
          ];
		     }
    }
    /*equipos con resultados*/
    $tbla_partidos=Partidos_por_evento::all();
    foreach ($tbla_partidos as  $value) {
      $resultado=Partidos_por_evento::find($value['i_id_pk'])->resultado()->get();
     foreach ($resultado as $key => $value2) {
        $datos2[]=[
            'Id'=>$value2['i_pk_id'], 
            'Evento'=>$value['i_fk_id_evento'],
            'Equipo1'=>$value['i_fk_id_equipo1']." - ".$value2['i_resultado_equipo1'],
            'Equipo2'=>$value['i_fk_id_equipo2']." - ".$value2['i_resultado_equipo2'],
            'Hora'=>$value['t_hora'],
            'Fecha'=>$value['d_fecha'],   
            'Lugar'=>$value['vc_lugar'],
          	'Estadio'=>$value['vc_estadio'],
            'rGanador'=>$value2['i_fk_id_equipo_ganador'],
            'rEstado'=>$value2['i_fk_id_estado_partido'],
            ];
      }
    }
   $data=[
        'datosPartidos'=>$datos,
        'Resultados'=>$datos2
      ];
  //dd($data);
  return view('Resultados/Resultados',$data);
  }
/*Registrar Resultados*/
public function registroResultado(Request $data){
       	$IdResultado=$data->IdResultado;
        $Equipo1=$data->rEquipo1;
        $Equipo2=$data->rEquipo2;
        $Ganador=$data->Ganador;
        $EstadoPartido=$data->EstadoPartido;
       	$Resultados=new Resultados;
       	$Resultados->i_pk_id=$IdResultado;
       	$Resultados->i_resultado_equipo1=$Equipo1;
       	$Resultados->i_resultado_equipo2=$Equipo2;
       	$Resultados->i_fk_id_equipo_ganador=$Ganador;
       	$Resultados->i_fk_id_estado_partido=$EstadoPartido;
        $Resultados->save();
       	return $this->partidosEvento();
   }
/*Modificar Resultados*/
public function modificarResultado(Request $data){
       	$IdResultado=$data->IdResultado;
        $Equipo1=$data->rEquipo1;
        $Equipo2=$data->rEquipo2;
        $Ganador=$data->Ganador;
        $EstadoPartido=$data->EstadoPartido;
       	$Resultados=new Resultados;
       	$Resultados=$Resultados::find($IdResultado);
        $Resultados->i_pk_id=$IdResultado;
       	$Resultados->i_resultado_equipo1=$Equipo1;
       	$Resultados->i_resultado_equipo2=$Equipo2;
       	$Resultados->i_fk_id_equipo_ganador=$Ganador;
       	$Resultados->i_fk_id_estado_partido=$EstadoPartido;
        $Resultados->save();
       return $this->partidosEvento();
   }
   /*Eliminar Resultados*/
public function eliminarResultado(Request $data){
     	$IdResultado=$data->IdResultado;
      $Resultados=new Resultados;
      $Resultados=$Resultados::find($IdResultado);
      $Resultados->delete();
      return $this->partidosEvento();
   }
}
