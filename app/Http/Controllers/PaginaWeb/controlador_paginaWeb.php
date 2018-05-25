<?php

/*
 * Importación de librerias y recursos.
 */

namespace App\Http\Controllers\PaginaWeb;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Validator;
use \Session;
use App\tbl_acceso;
use App\tbl_actividades;
use App\tbl_modulos;
use App\usuarios;
use \Excel;
//use App\Modelo_Tabla_Actividades_Accesos;
//use App\Modelo_Tabla_Actividades;

/*
 * Clase de Controlador de Pagina Web.
 */

class controlador_paginaWeb extends Controller
{
    /*
     * Funcion de la Solicitud del Registro.
     */

    public function solicitudRegistro(request $request){

        //$matriz=usuarios::find(12)->acceso->actividades[0]['pivot']->update(['i_estado'=>"0"]);
        //dd($matriz);
    }

    /*
     * Funcion del Inicio de Sesión.
     */

    public function inicioSesion(request $request){

        $loginV=Validator::make($request->all(),

            [

            'usuario'=>'required',
            'contraseña'=>'required',


            ]
        );



        if($loginV->fails()){
            return redirect('/')->withErrors($loginV->errors());
        }else{
                
            $usuarioEvaluarLogin=$request->usuario;
            $contrasenaEvaluarLogin=$request->contraseña;
            $encontradoUsuarioIgual=false;
            $encontradoContraseniaIgual=false;
            $usuarioExistente = tbl_acceso::where('vc_usuario',$usuarioEvaluarLogin);
            $encontradoUsuarioExisteneLogin = $usuarioExistente->count();
            $usuarioPassExistente = tbl_acceso::where('vc_contrasena',$contrasenaEvaluarLogin);
            $encontradoPassExisteneLogin = $usuarioPassExistente->count();

            if($encontradoUsuarioExisteneLogin>0){
                $encontradoUsuarioIgual=true;
            }
            if($encontradoPassExisteneLogin>0){
                $encontradoContraseniaIgual=true;
            }

            if($encontradoUsuarioIgual==true){

                if($encontradoContraseniaIgual==true){
                    
                    if(Session::has('Id_Usuario')){
                        Session::forget('Id_Usuario');
                    }
                    if(Session::has('Actividades_Inicio_Sesion')){
                        Session::forget('Actividades_Inicio_Sesion');
                    }

                    $usuarioExistenteDatos=$usuarioExistente->get();
                    Session::put('Id_Usuario',$usuarioExistenteDatos[0]['tbl_personas_i_pk_id']);

                    $actividades=usuarios::find(Session::get('Id_Usuario'))->acceso->actividades;
                    $cantidadActividades=$actividades->count();
                    for ($i=0; $i < $cantidadActividades ; $i++) { 
                        $actividadesDisponibles[] = array('id_actividad' => $actividades[$i]['pivot']['tbl_actividades_i_pk_id'], 'nombre_actividad' => $actividades[$i]['vc_nombre'], 'estado_actividad_local' => $actividades[$i]['pivot']['i_estado'],'estado_actividad_global' => $actividades[$i]['i_estado']);
                    }
                    Session::put('Actividades_Inicio_Sesion',$actividadesDisponibles);
                    return redirect('/usuarioIniciado');
                }else{
                    $mensajeLogin="La contraseña es incorrecta.";
                    
                    return redirect('/')->withErrors($mensajeLogin);

                }
                
            }else{

                $mensajeLogin="El usuario no se encuentra registrado.";
                    
                    return redirect('/')->withErrors($mensajeLogin);
            }
            
        }

    }
    public function cerrarSesion(request $request){
         Session::forget('Id_Usuario');
        //Session::forget('Actividades_Disponibles_Login');
        return redirect('/');

    }
    
    public function archivo_excel(request $request){
        

        

        Excel::create('Accesos_Usuarios', function($excel) {
         
            $users = tbl_acceso::all();
            //$users2 = tbl_actividades::all();

            
         
            $excel->sheet('Accesos_Usuarios', function($sheet) use($users) {

                $datos=($users);

                $sheet->fromArray($datos);
             
            });
            /*$excel->sheet('Pruebas2', function($sheet) use($users2) {

                $datos=($users2);
                dd($users2);
                $sheet->fromArray($datos);
             
            });*/
         
        })->export('xlsx');
        
    }


}
