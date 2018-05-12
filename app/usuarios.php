<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model{
	protected $table = 'tbl_personas';
	protected $primaryKey='i_pk_id';
	public $timestamps = false;
	public function organizaciones(){
		return $this->belongsToMany('App\organizaciones','tbl_pivot_organizacion_persona','i_pk_id','i_pk_id');
	}
	//RELACIONES DE OTROS MODELOS (SIN DESARROLLAR)
	/*public function acceso(){
		return $this->hasOne('App\tbl_acceso','tbl_personas_i_fk_id');
	}
	public function sexo(){
		return $this->belongsTo('App\tbl_sexo','i_pk_id');
	}
	public function tipos_documento(){
		return $this->belongsTo('App\tbl_tipos_documento','i_pk_id');
	}
	public function jugador(){
		return $this->hasOne('App\tbl_jugador','i_pk_id');
	}*/
}
