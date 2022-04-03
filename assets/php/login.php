<?php
require "db.php";
$correo = $_POST["correo"];
$pass = $_POST["password"];
 
if (isset($_POST["ingresar"])) {
	$query = mysqli_query($connection, "SELECT * FROM tabla_form WHERE correos='$correo' AND contraseñas='$pass'");
	$nr = mysqli_num_rows($query);
	if ($nr == 1) {
		//PONER NOMBRE ARREGLAR
		//	mysqli_fetch_array($query);
		echo "<script>alert('Bienvenido');</script>";
	} else {
		echo "<script>alert('Usuario no existe');</script>";
	}
}