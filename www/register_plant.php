<?php

// Variables to register
$name_sci = $_POST["NameSci"];
$name_com = $_POST["NameCom"];
$longitude = $_POST["Longitude"];
$latitude = $_POST["Latitude"];
$date = $_POST["Date"];
$observations = $_POST["Observations"];
$image = $_POST["imageCamara"];

$dbhost = 'localhost';
$dbname = 'plants';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $conn);
$query = "INSERT INTO $dbname 
    VALUES ('$name_sci', '$name_com', '$longitude', '$latitude', '$date', '$observations', '$image');";
mysql_query($query);
mysql_close();
header('Location: add_plant.php');

?>