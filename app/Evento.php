<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model{
	protected $table='tbl_eventos';
	protected $primaryKey='i_pk_id';
	public $timestamps = false;
	public function organizaciones(){
		return $this->hasMany('App\organizaciones','tbl_eventos_i_fk_id');
	}
}
