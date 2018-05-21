<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultados extends Model
{
 protected $table = 'tbla_resultados';
 protected $primaryKey= 'i_pk_id';
 protected $fillable =['i_pk_id', 'i_resultado_equipo1', 'i_resultado_equipo2', 'i_fk_id_equipo_ganador', 'i_fk_id_estado_partido'];
 public $timestamps=false;
 public function PartidosEvento(){
 return $this->belongsTo('App\Partidos_por_evento','i_pk_id');
 } 
}

