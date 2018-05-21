<?php

namespace App\Http\Controllers\Resultado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estadisticas;
use App\Resultados;
use App\Partidos_por_evento;

class estadisticasController extends Controller{
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
    $tablaEstadisticas=Estadisticas::all();
    foreach ($tablaEstadisticas as  $value) {
      $estadistica=Estadisticas::find($value['i_pk_id_partido'])->estadistica()->get();
        $datos2[]=[
            'Id'=>$value['i_pk_id_partido'], 
            'RematesEquipo1'=>$value['i_remates_equipo1'],
            'RematesEquipo2'=>$value['i_remates_equipo2'],
            'PosesionEquipo1'=>$value['i_posesion_equipo1'],
            'PosesionEquipo2'=>$value['i_posesion_equipo2'],
            'FaltasEquipo1'=>$value['i_faltas_equipo1'],   
            'FaltasEquipo2'=>$value['i_faltas_equipo2'],
          	'TarjetaA1'=>$value['i_tarjeta_a_equipo1'],
            'TarjetaA2'=>$value['i_tarjeta_a_equipo2'],
            'TarjetaR1'=>$value['i_tarjeta_r_equipo1'],
            'TarjetaR2'=>$value['i_tarjeta_r_equipo2'],
            'Esquinas1'=>$value['i_tiros_esquina_equipo1'],
            'Esquinas2'=>$value['i_tiros_esquina_equipo2'],
            ];
      
    }
   $data=[
        'datosPartidos'=>$datos,
        'Estadisticas'=>$datos2
      ];
       return view('Resultados/Estadisticas',$data);
  }
 	public function agregarEstadisticas(Request $data){
	    $IdResultado=$data->IdResultado;
        $rematesEquipo1=$data->rEquipo1;
        $rematesEquipo2=$data->rEquipo2;
        $posesionEquipo1=$data->pEquipo1;
        $posesionEquipo2=$data->pEquipo2;
        $faltasEquipo1=$data->fEquipo1;
        $faltasEquipo2=$data->fEquipo2;
        $tarjetaAmarillaEquipo1=$data->tAEquipo1;
        $tarjetaAmarillaEquipo2=$data->tAEquipo2;
        $tarjetaRojaEquipo1=$data->tREquipo1;
        $tarjetaRojaEquipo2=$data->tREquipo2;
        $esquinasEquipo1=$data->tEsquinaEquipo1;
        $esquinasEquipo2=$data->tEsquinaEquipo2;
       	$Estadisticas=new Estadisticas;
       	$Estadisticas->i_pk_id_Partido=$IdResultado;
       	$Estadisticas->i_remates_equipo1=$rematesEquipo1;
       	$Estadisticas->i_remates_equipo2=$rematesEquipo2;
       	$Estadisticas->i_posesion_equipo1=$posesionEquipo1;
       	$Estadisticas->i_posesion_equipo2=$posesionEquipo2;
       	$Estadisticas->i_faltas_equipo1=$faltasEquipo1;
       	$Estadisticas->i_faltas_equipo2=$faltasEquipo2;
       	$Estadisticas->i_tarjeta_a_equipo1=$tarjetaAmarillaEquipo1;
       	$Estadisticas->i_tarjeta_a_equipo2=$tarjetaAmarillaEquipo2;
       	$Estadisticas->i_tarjeta_r_equipo1=$tarjetaRojaEquipo1;
       	$Estadisticas->i_tarjeta_r_equipo2=$tarjetaRojaEquipo2;
       	$Estadisticas->i_tiros_esquina_equipo1=$esquinasEquipo1;
       	$Estadisticas->i_tiros_esquina_equipo2=$esquinasEquipo2;
        $Estadisticas->save();
       	return $this->partidosEvento();
 	}
    public function modificarEstadisticas(Request $data){
        $IdResultado=$data->IdResultado;
        $rematesEquipo1=$data->rEquipo1;
        $rematesEquipo2=$data->rEquipo2;
        $posesionEquipo1=$data->pEquipo1;
        $posesionEquipo2=$data->pEquipo2;
        $faltasEquipo1=$data->fEquipo1;
        $faltasEquipo2=$data->fEquipo2;
        $tarjetaAmarillaEquipo1=$data->tAEquipo1;
        $tarjetaAmarillaEquipo2=$data->tAEquipo2;
        $tarjetaRojaEquipo1=$data->tREquipo1;
        $tarjetaRojaEquipo2=$data->tREquipo2;
        $esquinasEquipo1=$data->tEsquinaEquipo1;
        $esquinasEquipo2=$data->tEsquinaEquipo2;
        $Estadisticas=new Estadisticas;
        $Estadisticas=$Estadisticas::find($IdResultado);
        $Estadisticas->i_pk_id_Partido=$IdResultado;
        $Estadisticas->i_remates_equipo1=$rematesEquipo1;
        $Estadisticas->i_remates_equipo2=$rematesEquipo2;
        $Estadisticas->i_posesion_equipo1=$posesionEquipo1;
        $Estadisticas->i_posesion_equipo2=$posesionEquipo2;
        $Estadisticas->i_faltas_equipo1=$faltasEquipo1;
        $Estadisticas->i_faltas_equipo2=$faltasEquipo2;
        $Estadisticas->i_tarjeta_a_equipo1=$tarjetaAmarillaEquipo1;
        $Estadisticas->i_tarjeta_a_equipo2=$tarjetaAmarillaEquipo2;
        $Estadisticas->i_tarjeta_r_equipo1=$tarjetaRojaEquipo1;
        $Estadisticas->i_tarjeta_r_equipo2=$tarjetaRojaEquipo2;
        $Estadisticas->i_tiros_esquina_equipo1=$esquinasEquipo1;
        $Estadisticas->i_tiros_esquina_equipo2=$esquinasEquipo2;
        $Estadisticas->save();
        return $this->partidosEvento();
  }
  public function eliminarEstadisticas(Request $data){
    $IdResultado=$data->IdResultado;
    $Estadisticas=new Estadisticas;
    $Estadisticas=$Estadisticas::Find($IdResultado);
    $Estadisticas->delete();
    return $this->partidosEvento();
  }
}
