@extends('master')                              

@section('content') 

	<?php 
		if(Session::has('Actividades_Disponibles_Login')){

			$actividadesDisponibles=Session::get('Actividades_Disponibles_Login');
			$cantidadActividadesDisponibles=$actividadesDisponibles->count();
			echo '<br><h1>ACTIVIDADES:</h1><br><br><h2>ESTADO 1: ACTIVADA<br>ESTADO 2: DESACTIVADA</h2><br><br>';
			for ($i=0; $i < $cantidadActividadesDisponibles; $i++) { 
				echo '<div class="alert alert-dismissible alert-warning"><h3>NUMERO ACTIVIDAD: '.$i.' - ID ACTIVIDAD: '.$actividadesDisponibles[$i]['tbl_actividades_i_pk_id'].' - ESTADO: '.$actividadesDisponibles[$i]['i_estado'].'</h3></div>';
			}

		}else{
			echo '<div class="alert alert-dismissible alert-warning"><h3>NO HAY ACTIVIDADES DISPONIBLES</h3></div>';
		}
	?>
@endsection
