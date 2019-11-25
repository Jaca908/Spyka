<?php
session_start();
require ("Conexion/Conexion.php");

$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($Conexion->connect_error) {
	die("Connection failed: " . $Conexion->connect_error);
}

$sql= "UPDATE Usuario SET EnLinea=0 WHERE IDUsuario=".$_SESSION['IDUsuario'].";";
$result = $Conexion->query($sql);

 session_destroy();
 header("location:index.html#_parent");
?>