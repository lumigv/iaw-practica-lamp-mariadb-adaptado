<?php
// Incluimos el fichero de conexión a la Base de datos
//Conexión a la base de datos
include_once("config.php");

//mysqli_query-Realiza una consulta a la base de datos
// Hacemos una búsqueda (selección) en orden descendente. Desde el último hasta el 1º.

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

//$result = mysqli_query($mysqli, "SELECT * FROM users WHERE name='Ana'");

/*
$stmt = mysqli_prepare($mysqli, "SELECT * FROM users ORDER BY id DESC");
mysqli_stmt_execute($stmt);
mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);
*/

/*
$nombre = 'Ana'
$stmt = mysqli_prepare($mysqli, "SELECT * FROM users WHERE name=?");
mysqli_stmt_bind_param($stmt, "s", $nombre);
mysqli_stmt_execute($stmt);
mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);
*/

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Panel de control</title>
</head>
<body>
<div>
	<header>
		<h1>Panel de Control</h1>
	</header>

	<main>
	<ul>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="add.html">Alta</a></li>
	</ul>
	<h2>Listado de empleados</h2>
	<table>
	<thead>
		<tr>
			<th>Nombre</th>
			<th>1º Apellido</th>
			<th>2º Apellido</th>
			<th>Edad</th>
			<th>Correo</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbdody>

<?php
//mysqli_fetch_array- Obtiene una fila de resultados como un array asociativo, numérico o ambos
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>\n";
		echo "<td>".$res['name']."</td>\n";
		echo "<td>".$res['surname1']."</td>\n";
		echo "<td>".$res['surname2']."</td>\n";
		echo "<td>".$res['age']."</td>\n";
		echo "<td>".$res['email']."</td>\n";
		echo "<td>";
		echo "<a href=\"edit.php?id=$res[id]\">Editar</a>\n";
		echo "<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('¿Está segur@ que desea eliminar el registro?')\" >Eliminar</a></td>\n";
		echo "</td>";
		echo "</tr>\n";
	}

	mysqli_close($mysqli);
	?>
	
	</tbdody>
	</table>
	</main>

	<footer>
    Created by the IES Miguel Herrero team &copy; 2024
  	</footer>
</div>
</body>
</html>
