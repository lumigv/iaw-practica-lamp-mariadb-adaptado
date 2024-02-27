<?php
// Incluimos el fichero de conexión a la Base de datos
//Conexión a la base de datos
include("config.php");

// Obtiene el id del dato a borrar de la URL
$id = $_GET['id'];

//Borra el registro de la base de datos
$stmt = mysqli_prepare($mysqli, "DELETE FROM users WHERE id=?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($mysqli);

// redirecting to the display page (index.php in our case)
header("Location:index.php");
?>