<?php
//Datos del servidor
$user = "root";
$pass = "";
$host = "localhost";
$datab = "dbformulario";
$tabla = "tabla_form";
//Conexion
$connection = mysqli_connect($host, $user, $pass, $datab);
if (!$connection) {
    //echo "<script>alert('Fallo al conectar a la Base Datos');</script>";
} else {
    //echo"<script>alert('Conectado a la Base de Datos');</script>";
}
$db = mysqli_select_db($connection, $datab);
if (!$db) {
    //echo "<script>alert('No se encontro la tabla');</script>";
} else {
    //echo"<script>alert('Tabla seleccionada');</script>";
}
?>