<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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