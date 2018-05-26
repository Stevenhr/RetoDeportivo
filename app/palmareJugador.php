<?php 
 
namespace App; 
 
use Illuminate\Database\Eloquent\Model; 
 
class palmareJugador extends Model 
{ 
    protected $table = 'tbl_palmaresjugador'; 
    protected $primaryKey = 'i_pk_id'; 
 
    public $timestamps = false; 
 
    protected $fillable = [ 
      'vc_competencia', 
      'vc_anio', 
      'vc_equipo' 
    ];

    public function Jugador(){ 
 
      return $this->belongsTo('App\Jugador', 'tbl_equipo_i_pk_id'); 
    }   
}


 	

