<?php

/*
 * Importación de librerias y recursos.
 */

namespace App\Http\Controllers\PaginaWeb;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Validator;
use \Session;
use App\Modelo_Tabla_Accesos;
use App\Modelo_Tabla_Actividades_Accesos;

/*
 * Clase de Controlador de Pagina Web.
 */

class controlador_paginaWeb extends Controller
{
    /*
     * Funcion de la Solicitud del Registro.
     */

    public function solicitudRegistro(request $request){
        return redirect('/inicio');
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
            $usuarioExistente = Modelo_Tabla_Accesos::where('vc_usuario',$usuarioEvaluarLogin);
            $encontradoUsuarioExisteneLogin = $usuarioExistente->count();
            $usuarioPassExistente = Modelo_Tabla_Accesos::where('vc_contrasena',$contrasenaEvaluarLogin);
            $encontradoPassExisteneLogin = $usuarioPassExistente->count();

            if($encontradoUsuarioExisteneLogin>0){
                $encontradoUsuarioIgual=true;
            }
            if($encontradoPassExisteneLogin>0){
                $encontradoContraseniaIgual=true;
            }

            if($encontradoUsuarioIgual==true){

                if($encontradoContraseniaIgual==true){
                    if(Session::has('Session_Actividades_Disponibles_Login')){
                        Session::forget('Session_Actividades_Disponibles_Login');
                    }
                    $usuarioExistenteDatos=$usuarioExistente->get();
                    $actividadesDisponibles=Modelo_Tabla_Actividades_Accesos::where('acceso_tbl_personas_i_pk_id',$usuarioExistenteDatos[0]['tbl_personas_i_pk_id']);
                    $actividadesDisponiblesDatos=$actividadesDisponibles->get();
                    $cantidadActividadesDisponibles=$actividadesDisponiblesDatos->count();
                    if($cantidadActividadesDisponibles>0){
                        Session::put('Session_Actividades_Disponibles_Login',$actividadesDisponiblesDatos);
                    }
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

        Session::forget('Session_Actividades_Disponibles_Login');
        return redirect('/');

    }
}
