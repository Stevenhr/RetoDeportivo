<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'tbl_jugador';

    protected $primaryKey="i_pk_id";

    public $timestamps = false;

    protected $fillable =[
    	'nombre',
    	'i_altura',
    	'vc_dorsal',
    	'vc_posicion',
    	'vc_lugarNacimiento',
    	'd_fechanacimiento',
    	'tbl_equipo_i_pk_id',
    	'tx_biografia',
    	'vc_foto'
    ];

    public function Equipo(){ 
 
        return $this->belongsTo('App\Equipo', 'i_pk_id'); 
    } 
 
    public function PalmareJugador(){ 
 
        return $this->hasOne('App\PalmareJugador', 'i_pk_id'); 
    } 
}
