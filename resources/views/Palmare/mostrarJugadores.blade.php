<!DOCTYPE html>
<html>
<head>
	<title>mostrar jugadores</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Altura</th>
				<th scope="col">Dorsal</th>
				<th scope="col">Posicion</th>
				<th scope="col">Lugar Nacimiento</th>
				<th scope="col">Fecha Nacimiento</th>
				<th scope="col">Tabla del equipo</th>
				<th scope="col">Biografia</th>
				<th scope="col">Imagen</th>
			</tr>
		</thead>
	</table>
	<?php 
		use App\ModalCrudPalmare;
		use Illuminate\Database\Eloquent\Collection;

		$recibir = ModalCrudPalmare::All();
		$max = $recibir->count();
			for ($i=0; $i < $max; $i++) { 
				echo "<tr>";
					echo "<th><a href='deshabilitarCrud?dlt=".$recibir[$i]['i_pk_id']."'>Eliminar</a></th>";
				echo "</tr>";
			}
	 ?>
</body>
</html>