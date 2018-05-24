<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class PalmareEquipo extends Model{

	protected $table =  'tbl_palmareequipo';
    protected $primaryKey = 'i_pk_id'; 
 
    public $timestamps = false; 
 
    protected $fillable = [ 
      'vc_competencia', 
      'vc_anio', 
      'vc_imagen' 
    ];

    public function Equipo(){ 
 
      return $this->belongsTo('App\Persona', 'tbl_equipo_i_pk_id'); //duda aqui
    } 
}
 ?>
