<?php

// Variables to register
$name_sci = $_POST["NameSci"];
$name_com = $_POST["NameCom"];
$longitude = $_POST["Longitude"];
$latitude = $_POST["Latitude"];
$date = $_POST["Date"];
$observations = $_POST["Observations"];

if ($name_sci != '') {
	$picture_name = mysql_real_escape_string($_FILES["URL"]["name"]);
	$picture_data = mysql_real_escape_string(file_get_contents($_FILES["URL"]["tmp_name"]));
	$picture_type = mysql_real_escape_string($_FILES["URL"]["type"]);	
	$dbhost = 'localhost';
	$dbname = 'plants';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	mysql_select_db($dbname, $conn);
	$query = "INSERT INTO $dbname 
		VALUES ('$name_sci', '$name_com', '$longitude', '$latitude', '$date', '$observations', '$picture_name', '$picture_data');";
	mysql_query($query);
	mysql_close();
	//header('Location: add_plant.php');
	echo "success";
} else {
	echo "failure";
}

?>
