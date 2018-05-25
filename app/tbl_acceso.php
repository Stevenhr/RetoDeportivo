<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_acceso extends Model{
	protected $table = 'tbl_acceso';
	protected $primaryKey='tbl_personas_i_pk_id';
	public $timestamps = false;

    //Funciona bestialmente bien
	public function usuarios(){
		return $this->hasOne('App\usuarios','i_pk_id');
	}
    
    //
	public function actividades(){
		return $this->belongsToMany('App\tbl_actividades','tbl_pivote_actividades_accesos','acceso_tbl_personas_i_pk_id','tbl_actividades_i_pk_id');
	}
}
