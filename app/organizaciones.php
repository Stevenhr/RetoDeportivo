<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class organizaciones extends Model{
	protected $table = 'tbl_organizaciones';
	protected $primaryKey='i_pk_id';
	public $timestamps = false;
	
	public function evento(){
		return $this->belongsTo('App\Evento','tbl_eventos_i_fk_id');
	}
	public function usuarios(){
		return $this->belongsToMany('App\usuarios','tbl_pivot_organizacion_persona','i_pk_id','i_pk_id');
	}
}
