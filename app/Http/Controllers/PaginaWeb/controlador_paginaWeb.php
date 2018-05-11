<?php

/*
 * Importación de librerias y recursos.
 */

namespace App\Http\Controllers\PaginaWeb;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Validator;
use App\modelo_acceso;

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
                
                $correoEvaluarLogin=$request->usuario;
                $contrasenaEvaluarLogin=$request->contraseña;
                $econtradoCorreoIgual=false;
                $econtradoContraseniaIgual=false;
            if($correoEvaluarLogin=="adminsec@jimail.com" && $contrasenaEvaluarLogin=="admin99"){
                $loginDeUsuario[]=array(

                    'usuario'=>$request->usuario,
                    'contraseña'=>$request->contraseña,

                );

                Session::put('loginDeUsuario',$loginDeUsuario);
                return view('registro_y_login\admin');
            }else{

                
            
                $usuarioCorreoExistente = modelo_acceso::where('vc_usuario',$correoEvaluarLogin);
                $encontradoCorreoExisteneLogin = $usuarioCorreoExistente->count();
                $usuarioPassExistente = modelo_acceso::where('vc_contrasena',$contrasenaEvaluarLogin);
                $encontradoPassExisteneLogin = $usuarioPassExistente->count();

                if($encontradoCorreoExisteneLogin>0){
                    $econtradoCorreoIgual=true;
                }
                if($encontradoPassExisteneLogin>0){
                    $econtradoContraseniaIgual=true;
                }

                if($econtradoCorreoIgual==true){

                    if($econtradoContraseniaIgual==true){
                        return redirect('/usuarioIniciado');
                    }else{
                        $mensajeLogin="La contraseña es incorrecta.";
                        
                        return redirect('/')->withErrors($mensajeLogin);

                    }
                    
                }else{

                    $mensajeLogin="El correo no se encuentra registrado.";
                        
                        return redirect('/')->withErrors($mensajeLogin);
                }
            }
        }

    }
}
