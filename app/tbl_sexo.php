<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_sexo extends Model{
	protected $table = 'tbl_sexo';
	protected $primaryKey='i_pk_id';
	public $timestamps = false;

	//Funciona corectamente
	public function usuarios(){
		return $this->hasMany('App\usuarios','tbl_sexo_i_pk_id');
	}
}
