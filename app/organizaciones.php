<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class organizaciones extends Model{
	protected $table = 'tbl_organizaciones';
	protected $primaryKey='i_pk_id';
	public $timestamps = false;

    //Funciona correctamente
	public function evento(){
		return $this->belongsTo('App\Evento','tbl_eventos_i_fk_id');
	}
	//Funciona brutalmente bien
	public function usuarios(){
		return $this->belongsToMany('App\usuarios','tbl_pivot_organizacion_persona','tbl_organizaciones_i_fk_id','tbl_personas_i_fk_id');
	}
}
