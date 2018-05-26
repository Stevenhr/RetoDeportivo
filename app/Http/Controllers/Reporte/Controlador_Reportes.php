<?php

namespace App\Http\Controllers\Reporte;
use App\Http\Controllers\Controller;
use \Session;

use Illuminate\Http\Request;
use App\tbl_acceso;
use App\usuarios;

class Controlador_Reportes extends Controller
{
    public function prueba(){
    	Session::forget('prueba');
    	$id=Session::get('Id_Usuario');

    	$datos2=tbl_acceso::all();
    	
    	Session::put('prueba',$datos2);
    	return redirect('/prueba');
    }

    public function reportes(request $request){

    	$id_reporte=$request->input('id_reporte');

    	switch ($id_reporte) {

    		case "1":
                
                 $datos=usuarios::with('organizaciones.evento')->get()->find(Session::get('Id_Usuario'));
                 
                 if(isset($datos)){
                    $datos2=count($datos['organizaciones']);
               
                  for ($i=0; $i < $datos2; $i++) { 

                      for ($j=0; $j < $datos2; $j++) { 

                         $arrayName[] ='<tr><td><center>'.$datos['organizaciones'][$i]['evento'][$j]['i_pk_id'].'</center></td><td><center>'.$datos['organizaciones'][$i]['evento'][$j]['vc_nombre'].'</center></td><td><center>'.$datos['organizaciones'][$i]['evento'][$j]['d_fechaInicio'].'</center></td><td><center>'.$datos['organizaciones'][$i]['evento'][$j]['d_fechaFinal'].'</center></td><td><center>'.$datos['organizaciones'][$i]['evento'][$j]['vc_logo'].'</center></td></tr>';
                    }
                  }
                    



                $inyeccion = ['codigo'=>$arrayName];

                return view('Reportes/Imprimir_Reportes/Usuario/Reporte_Eventos_Registrados',$inyeccion); 
            }else{

                 return view('Reportes/Imprimir_Reportes/Usuario/Reporte_Eventos_Registrados'); 
            }




    			break;

    		case "2":
                
    			$datos=usuarios::with('organizaciones.evento')->get()->find(Session::get('Id_Usuario'));
                 
                 if(isset($datos)){
               		$datos2=count($datos['organizaciones']);
               

	               	for ($j=0; $j < $datos2; $j++) { 
	               		 $arrayName[] ='<tr><td><center>'.$datos['organizaciones'][$j]['i_pk_id'].'</center></td><td><center>'.$datos['organizaciones'][$j]['vc_nombre'].'</center></td><td><center>'.$datos['organizaciones'][$j]['i_nit'].'</center></td><td><center>'.$datos['organizaciones'][$j]['vc_direccion'].'</center></td><td><center>'.$datos['organizaciones'][$j]['i_telefono'].'</center></td><td><center>'.$datos['organizaciones'][$j]['vc_correo'].'</center></td><td><center>'.$datos['organizaciones'][$j]['i_valorInscripcion'].'</center></td></tr>';
	               	}



				$inyeccion = ['codigo'=>$arrayName];

    			return view('Reportes/Imprimir_Reportes/Usuario/Reporte_Organizaciones_Registrados',$inyeccion); 
            }else{

                 return view('Reportes/Imprimir_Reportes/Usuario/Reporte_Organizaciones_Registrados'); 
            }
    			break;


             case "3":
                   

              $datos=usuarios::with('organizaciones.evento')->get()->find(Session::get('Id_Usuario'));
                 
                 if(isset($datos)){
                    $datos2=count($datos['organizaciones']);
               

                    for ($j=0; $j < $datos2; $j++) { 
                         $arrayName[] ='<tr><td><center>'.$datos['organizaciones'][$j]['i_pk_id'].'</center></td><td><center>'.$datos['organizaciones'][$j]['vc_nombre'].'</center></td><td><center>'.$datos['organizaciones'][$j]['i_nit'].'</center></td><td><center>'.$datos['organizaciones'][$j]['vc_direccion'].'</center></td><td><center>'.$datos['organizaciones'][$j]['i_telefono'].'</center></td><td><center>'.$datos['organizaciones'][$j]['vc_correo'].'</center></td><td><center>'.$datos['organizaciones'][$j]['i_valorInscripcion'].'</center></td></tr>';
                    }



                $inyeccion = ['codigo'=>$arrayName];

                return view('Reportes/Imprimir_Reportes/Usuario/Reporte_Pronosticos_Registrados',$inyeccion); 
            }else{

                 return view('Reportes/Imprimir_Reportes/Usuario/Reporte_Pronosticos_Registrados'); 
            }





                break;   
            
    		 
    		default:
    			//return redirect('/reporte_eventos_registrados'); 
    			break;
    	}
    }
}
