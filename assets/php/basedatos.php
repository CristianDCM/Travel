<head>
  <title>Tabla Registro</title>
  <link rel="stylesheet" type="text/css" href="../css/stylelogin.css">
</head>
<!--Estilo base de datos-->
<style>
  tr:nth-child(2n+1){
    /* Filas impares grises */
    background-color: #ddd;
  }
</style>
<?php
require ("db.php");
$tabla="tabla_form";
//Verificacion de conexion
if (!$connection) {
  echo "<script>alert('Fallo al conectar a la Base Datos');</script>";
} else {
  echo "<b><h3>Conectado a la Base de Datos: $datab</h3></b>";
  echo "<b><h3>Tabla seleccionada: $tabla</h3></b>";
}
$consulta = "SELECT * FROM $tabla";
$result = mysqli_query($connection, $consulta);
if (!$result) {
  echo "No se ha podido realizar la consulta";
}
//Tabla de datos
echo "<table class='cuadro-inf'>";
echo "<tr>";
echo "<th><h2>ID</th></h2>";
echo "<th><h2>Nombres</th></h2>";
echo "<th><h2>Apellidos</th></h2>";
echo "<th><h2>Correos</th></h2>";
echo "<th><h2>Contraseñas</th></h2>";
echo "</tr>";
while ($colum = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td><h3>" . $colum['id'] . "</td></h3>";
  echo "<td><h3>" . $colum['nombres'] . "</td></h3>";
  echo "<td><h3>" . $colum['apellidos'] . "</td></h3>";
  echo "<td><h3>" . $colum['correos'] . "</td></h3>";
  echo "<td><h3>" . $colum['contraseñas'] . "</td></h3>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($connection);
echo "<input type='button' onclick=location.href='../../login.html' value='Volver Atrás'>";
?>
<a href="../../login.html">


