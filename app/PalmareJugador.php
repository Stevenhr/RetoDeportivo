<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PalmareJugador extends Model
{
    protected $table = 'tbl_palmaresjugador';
    protected $primaryKey = 'i_pk_id';

    public $timestamps = false;

    protected $fillable = [
    	'vc_competencia',
    	'vc_anio',
    	'vc_equipo'
    ];
}