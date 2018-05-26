<?php 
 
namespace App; 
 
use Illuminate\Database\Eloquent\Model; 
 
class Equipo extends Model 
{ 
    protected $table = 'tbl_equipo'; 
    protected $primaryKey="i_pk_id"; 
    public $timestamps = false; 
 
    protected $fillable =[  
      'nombre', 
      'vc_propietario', 
      'vc_presidente', 
      'vc_entrenador', 
      'vc_estadio', 
      'vc_ubicacion', 
        'vc_fundado', 
    ]; 
  
    public function PalmareEquipo(){  
  
        return $this->hasMany('App\PalmareEquipo', 'tbl_equipo_i_fk_id');  
    }  
}