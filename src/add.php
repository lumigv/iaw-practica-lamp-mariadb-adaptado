<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Alta Empleado</title>
</head>

<body>
<div>
	<header>
		<h1>Panel de Control</h1>
	</header>

	<main>

<?php
// including the database connection file
include_once("config.php");

//isset determina si una variable está definida y no es null
//Si alguna variable no está definida, sale
/*if(!isset($_POST['name']) || !isset($_POST['age']) || !isset($_POST['email']) || !isset($_POST['surname1'])) {
	exit;
} */
//Otra manera
if(isset($_POST['Submit'])) {
	//incorporamos caracteres de Scape en aquellos caracteres especiales que puede generar problemas en sentencias SQL
	//Los caracteres afectados son: NUL (ASCII 0), \n, \r, \, ', ", and CTRL+Z.
	//Obtiene los datos del formulario
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$surname1 = mysqli_real_escape_string($mysqli, $_POST['surname1']);
	$surname2 = mysqli_real_escape_string($mysqli, $_POST['surname2']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);

// Determina si una variable está vacía ("empty")
// Una variable es "empty" si no existe o su valor es falso
	if(empty($name) || empty($age) || empty($email) || empty($surname1)) {
		if(empty($name)) {
			echo "<div>Name field is empty</div>";
		}

		if(empty($surname1)) {
			echo "<div>Surname1 field is empty</div>";
		}

		if(empty($age)) {
			echo "<div>Age field is empty</div>";
		}

		if(empty($email)) {
			echo "<div>Email field is empty</div>";
		}

		// Enlace a la siguiente página
		echo "<a href='javascript:self.history.back();'>Go Back</a>";
	} else {
	// Si todos los campos están completos (no vacíos)
	// inserta los datos en la base de datos
	//$query = "INSERT INTO users (name,surname1,surname2,age,email) VALUES('$name','$surname1','$surname2',$age,'$email')";
	//$result = mysqli_query($mysqli, $query);

	//Consulta preparada
	$stmt = mysqli_prepare($mysqli, "INSERT INTO users (name,surname1,surname2,age,email) VALUES(?,?,?,?,?)");
	mysqli_stmt_bind_param($stmt, "sssis", $name, $surname1, $surname2, $age, $email);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_free_result($stmt);
	mysqli_stmt_close($stmt);
	

	// display success message
	echo "<div>Datos añadidos correctamente</div>";
	echo "<a href='index.php'>Ver resultado</a>";
}

//Cierra la conexión
mysqli_close($mysqli);

?>
	</main>
	<footer>
    Created by the IES Miguel Herrero team &copy; 2024
  	</footer>
</div>
</body>
</html>
