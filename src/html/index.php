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
        <tr>
			<td>Ana</td>
			<td>Perez</td>
			<td>Diaz</td>
			<td>50</td>
			<td>ana@gmail.com</td>
			<td>
                <a href="edit.php">Editar</a>
                <a href="delete.php" onClick="return confirm('¿Está segur@ que desea eliminar el registro?')">Baja</a>
            </td>
		</tr>
        <tr>
			<td>Pedro</td>
			<td>Fernandez</td>
			<td>Gonzalez</td>
			<td>35</td>
			<td>pedro@gmail.com</td>
			<td>
                <a href="edit.php">Editar</a>
                <a href="delete.php" onClick="return confirm('¿Está segur@ que desea eliminar el registro?')">Baja</a>
            </td>
		</tr>
        <tr>
			<td>Patricia</td>
			<td>Cueto</td>
			<td>Abascal</td>
			<td>20</td>
			<td>patricia@gmail.com</td>
			<td>
                <a href="edit.php">Editar</a>
                <a href="delete.php" onClick="return confirm('¿Está segur@ que desea eliminar el registro?')">Baja</a>
            </td>
		</tr>
	</tbdody>
	</table>
	</main>

	<footer>
    Created by the IES Miguel Herrero team &copy; 2024
  	</footer>
</div>
</body>
</html>