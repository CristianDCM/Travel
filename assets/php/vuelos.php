<?php
require "db.php";
//Llamada al imput
$origen = $_POST["origen"];
$destino = $_POST["destino"];
$ida = $_POST["ida"];
$vuelta = $_POST["vuelta"];
$personas = $_POST["personas"];
//Nombre tabla
$tabla = "tabla_reser";
//Insertar datos en tabla
$Instruccion = "INSERT INTO $tabla (vuelo, origen, destino, ida, vuelta, personas) VALUES (NULL, '$origen', '$destino', '$ida', '$vuelta', '$personas')";
$Resultado = mysqli_query($connection, $Instruccion);
if (!$Resultado) {
    echo "<script>alert('Fallo al reservar');</script>";
} else {
    echo "<script>alert('Reverservacion exitosa');</script>";
}













?>