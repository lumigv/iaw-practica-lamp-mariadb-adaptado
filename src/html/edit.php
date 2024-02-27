<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Modificación Empleado</title>
</head>

<body>
<div>
	<header>
		<h1>Panel de Control</h1>
	</header>
	
	<main>				
	<ul>
		<li><a href="index.php" >Inicio</a></li>
		<li><a href="add.html" >Alta</a></li>
		<li><a href="">Modificación</a></li>		
	</ul>
	<h2>Modificación empleado</h2>

	<form action="edit.php" method="post">

		<div>
			<label for="name">Nombre</label>
			<input type="text" name="name" id="name" value="Ana" required>
		</div>

		<div>
			<label for="surname1">1º Apellido</label>
			<input type="text" name="surname1" id="surname1" value="Perez" required>
		</div>

		<div>
			<label for="surname2">2º Apellido</label>
			<input type="text" name="surname2" id="surname2" value="Diaz">
		</div>

		<div>
			<label for="age">Edad</label>
			<input type="number" name="age" id="age" value="50" required>
		</div>

		<div>
			<label for="email">Correo</label>
			<input type="email" name="email" id="email" value="ana@gmail.com" required>
		</div>

		<div >
			<input type="hidden" name="id" value=1>
			<input type="submit" value="Guardar cambios">
			<input type="button" value="Cancelar" onclick="location.href='index.php'">
		</div>
	</form>

	</main>	
	<footer>
	Created by the IES Miguel Herrero team &copy; 2022
  	</footer>
</div>
</body>
</html>