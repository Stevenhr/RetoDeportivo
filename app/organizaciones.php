<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class organizaciones extends Model{
	protected $table = 'tbl_organizaciones';
	protected $primaryKey='i_pk_id';
	public $timestamps = false;
	public function evento(){
		return $this->belongsTo('App\Evento','i_pk_id');
	}
	public function pivot(){
		return $this->hasMany('App\tbl_pivot_organizacion_persona','tbl_organizaciones_i_fk_id');
	}
}
