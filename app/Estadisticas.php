<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadisticas extends Model{
 	protected $table = 'tbl_estaditicas';
 	protected $primaryKey= 'i_pk_id_partido';
 	protected $fillable=['i_pk_id_partido', 'i_remates_equipo1', 'i_remates_equipo2', 'i_posesion_equipo1', 'i_posesion_equipo2', 'i_faltas_equipo1', 'i_faltas_equipo2', 'i_tarjeta_a_equipo1', 'i_tarjeta_a_equipo2', 'i_tarjeta_r_equipo1', 'i_tarjeta_r_equipo2', 'i_tiros_esquina_equipo1', 'i_tiros_esquina_equipo2'];
 	public $timestamps = false;
 	public function estadistica(){
 		return $this->belongsTo('App\Partidos_por_evento','i_id_pk');
 	}
}