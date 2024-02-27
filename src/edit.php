<?php
// Incluimos el fichero de conexión a la Base de datos
//Conexión a la base de datos
include_once("config.php");

//isset determina si una variable está definida y no es null
//Si alguna variable no está definida, sale
if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['surname1']) && isset($_POST['surname2']) && isset($_POST['age']) && isset($_POST['email'])) {
//Obtiene los datos del formulario	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$surname1 = mysqli_real_escape_string($mysqli, $_POST['surname1']);
	$surname2 = mysqli_real_escape_string($mysqli, $_POST['surname2']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);

	// checking empty fields
	if(empty($name) || empty($surname1) || empty($age) || empty($email)) {
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($surname1)) {
			echo "<font color='red'>Surname1 field is empty.</font><br/>";
		}

		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		//Actualiza los datos en la base de datos
		//Utiliza sentencias preparadas. Se usa para ejecutar la misma sentencia repetidamente con gran eficacia.
		//Las sentencias preparadas consiste en 2 etapas: preparación y ejecución
		//1ª ETAPA: preparar
		$stmt = mysqli_prepare($mysqli, "UPDATE users SET name=?,surname1=?,surname2=?,age=?,email=? WHERE id=?");
		//2ª ETAPA: vincular y ejecutar
		mysqli_stmt_bind_param($stmt, "sssisi", $name, $surname1, $surname2, $age, $email, $id);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_free_result($stmt);
		mysqli_stmt_close($stmt);

		// redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>

<?php
// getting id from url
$id = $_GET['id'];

$id = mysqli_real_escape_string($mysqli, $id);

// selecting data associated with this particular id
$stmt = mysqli_prepare($mysqli, "SELECT name, surname1, surname2, age, email FROM users WHERE id=?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $name, $surname1, $surname2, $age, $email);
mysqli_stmt_fetch($stmt);
mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
?>

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
			<input type="text" name="name" id="name" value="<?php echo $name;?>" required>
		</div>

		<div>
			<label for="surname1">1º Apellido</label>
			<input type="text" name="surname1" id="surname1" value="<?php echo $surname1;?>" required>
		</div>

		<div>
			<label for="surname2">2º Apellido</label>
			<input type="text" name="surname2" id="surname2" value="<?php echo $surname2;?>">
		</div>

		<div>
			<label for="age">Edad</label>
			<input type="number" name="age" id="age" value="<?php echo $age;?>" required>
		</div>

		<div>
			<label for="email">Correo</label>
			<input type="email" name="email" id="email" value="<?php echo $email;?>" required>
		</div>

		<div >
			<input type="hidden" name="id" value=<?php echo $id;?>>
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