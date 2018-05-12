<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_pivot_organizacion_persona extends Model{
	protected $table = 'tbl_pivot_organizacion_persona';
	public $timestamps = false;
	public function organizacion(){
		return $this->belongsTo('App\organizaciones','i_pk_id');
	}
	public function personas(){
		return $this->belongsTo('App\usuarios','i_pk_id');
	}
}
