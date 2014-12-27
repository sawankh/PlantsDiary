<?php

$dbhost = 'localhost';
$dbname = 'productos';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $conn);
$username = mysql_real_escape_string($username);
$query = "DELETE FROM $dbname";
mysql_query($query);
mysql_close();
header('Location: index.php');

?>