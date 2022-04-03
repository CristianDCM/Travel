<?php
require "db.php";
//Llamada al imput
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correos = $_POST["correos"];
$contraseñas = $_POST["contraseñas"];
$recontraseñas = $_POST["recontraseñas"];
//Nombre base de datos
$datab = "dbformulario";
//Nombre tabla
$tabla = "tabla_form";
//Confirma contraseña
if ($contraseñas != $recontraseñas) {
  die("<script>alert('Las contraseñas no coinciden')</script>");
}
//Encrip hashing md5
//$encrypt = MD5($contraseñas);

//Insertar datos en tabla
$instruccion_SQL = "INSERT INTO $tabla (nombres, apellidos, correos, contraseñas)
VALUES ('$nombres','$apellidos','$correos','$contraseñas')";
$resultado = mysqli_query($connection, $instruccion_SQL);
if (!$resultado) {
  echo "<script>alert('Fallo al registrar');</script>";
} else {
  echo "<script>alert('Registro exitoso');</script>";
}
?>