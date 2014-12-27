<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];

$dbhost = 'localhost';
$dbname = 'productos';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $conn);
$username = mysql_real_escape_string($username);
$query = "INSERT INTO $dbname 
    VALUES ('$id', '$nombre', '$descripcion', '$precio', '$stock');";
mysql_query($query);
mysql_close();
header('Location: index.php');

?>