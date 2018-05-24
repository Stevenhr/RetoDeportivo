<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model{
	protected $table = 'tbl_personas';
	protected $primaryKey='i_pk_id';
	public $timestamps = false;
    
    //Funciona brutalmente bien
	public function organizaciones(){
		return $this->belongsToMany('App\organizaciones','tbl_pivot_organizacion_persona','tbl_personas_i_fk_id','tbl_organizaciones_i_fk_id');
	}

	public function acceso(){
		return $this->hasOne('App\tbl_acceso','tbl_personas_i_pk_id');
	}

	public function sexo(){
		return $this->belongsTo('App\tbl_sexo','tbl_sexo_i_pk_id');
	}

	public function tipos_documentos(){
		return $this->belongsTo('App\tbl_tipos_documentos','tbl_tipos_documentos_i_pk_id');
	}



	//RELACIONES DE OTROS GRUPOS PARA USUARIOS (SIN DESARROLLAR)
	/*public function jugador(){
		return $this->hasOne('App\tbl_jugador','i_pk_id');
	}*/
}
