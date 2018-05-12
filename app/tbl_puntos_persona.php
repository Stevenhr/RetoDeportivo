<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_puntos_persona extends Model
{
   protected $table = 'tbl_puntos_persona';
   protected $primaryKey='i_pk_id';
   protected $fillable= ['i_pk_id', 'i_puntaje'];
   public function puntoPersona(){
		return $this->belongsTo('App\tbl_pronosticos_personas','i_pk_id');
   }
}
