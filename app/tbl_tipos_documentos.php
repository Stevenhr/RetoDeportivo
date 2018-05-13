<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_tipos_documentos extends Model{
	protected $table = 'tbl_tipos_documentos';
	protected $primaryKey='i_pk_id';
	public $timestamps = false;
	public function usuarios(){
		return $this->hasMany('App\usuarios','tbl_tipos_documentos_i_pk_id');
	}
}
