
     <?php
	// Conectando, seleccionando la base de datos
	$link = mysql_connect("localhost","root","")
	    or die('No se pudo conectar: ' . mysql_error());
	mysql_select_db('productos') or die('No se pudo seleccionar la base de datos');
	
	// Realizar una consulta MySQL
	$valor = intval($_POST['value']);
	$query = "SELECT * FROM productos WHERE precio > $valor";
	
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	
	$rawdata = array(); //creamos un array

	$i=0;
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			$rawdata[$i] = $row;
			$i++;
	}
	
	// Liberar resultados
	mysql_free_result($result);
	
	// Cerrar la conexión
	mysql_close($link);
	
	echo json_encode($rawdata, JSON_UNESCAPED_UNICODE);
	?>
	
