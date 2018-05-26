@extends('master')                              

@section('content') 

	<div class="container-fluid">
	  <h1>Reportes Usuario</h1>
	  	{!! Form::open(['url' => 'reportes']) !!}
        <button type="button submit" class="btn btn-primary" name="id_reporte" value="1">Eventos Registrados</button>
        <button type="button submit" class="btn btn-primary" name="id_reporte" value="2">Organizaciones Registradas</button>
        {!! Form::close() !!}
		@yield('contenido')
	</div>
	
@endsection