<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	
	$name_com = (string)$_POST["Search"];
	
	$link = mysql_connect("localhost", "root", "") or die('No se pudo conectar: ' . mysql_error());
	mysql_select_db('plants') or die('No se pudo seleccionar la base de datos');
	$query = "SELECT * FROM plants WHERE (COMMON = '$name_com')";
	
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	
	$rawdata = array();
	//creamos un array
	
	if (!$result = mysql_query($query))
		die();
	//si la conexión cancelar programa
	
	//guardamos en un array multidimensional todos los datos de la consulta
	
	$i = 0;
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$row['PICTURE'] = base64_encode($row['PICTURE']);
		$rawdata[$i] = $row;
		$i++;
	}
	
	mysql_close($link);
	
	

	echo json_encode($rawdata, JSON_UNESCAPED_UNICODE);
?>