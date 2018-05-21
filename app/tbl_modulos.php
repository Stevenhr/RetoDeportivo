<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_modulos extends Model{
	protected $table = 'tbl_modulos';
	protected $primaryKey='i_pk_id';
	public $timestamps = false;
	public function actividades(){
		return $this->hasMany('App\tbl_actividades','tbl_modulos_i_fk_id');
	}
}