<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partidos_por_evento extends Model
{
    protected $table = 'tbl_Partidos_por_evento';
    protected $primayKey= 'i_id_pk';
 		protected $fillable=['i_id_pk', 'i_fk_id_evento', 'i_fk_id_equipo1', 'i_fk_id_equipo2', 't_hora', 'd_fecha', 'vc_lugar', 'vc_estadio', 'i_estado_terminado'];

	public function eventos(){
 		return $this->belongsTo('App\Eventos','i_pk_id');
 	}
 	public function resultado(){
 		return $this->hasOne('App\Resultados','i_pk_id');
 	}
 	public function Estadistica(){
 		return $this->hasOne('App\Estadisticas','i_pk_id_partido');
 	}
 	public function pronostico(){
 		return $this->hasOne('App\Pronosticos_personas','i_pk_id');
 	}
}

