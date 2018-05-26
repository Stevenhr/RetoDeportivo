<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pronosticos_personas extends Model
{
    protected $table = 'tbl_pronosticos_personas';
    protected $primayKey= 'i_pk_id';

 		protected $fillable=['i_pk_id', 'i_fk_id_partido', 'i_fk_id_personas', 'i_fk_id_organizacion', 'i_resultado_equipo1', 'i_resultado_equipo2'];


		public function PartidosEvento(){
 			return $this->belongsTo('App\Partidos_por_evento','i_id_pk');
 		}

 		public function puntosPersona(){

             return $this->hasOne('App\Puntos_persona','i_pk_id');
 		}

       

}
