<!DOCTYPE html> 
<html>
<head>
	<title>App Interfaces Inteligentes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/index.css" rel="stylesheet" type="text/css">
	<link href="css/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/table.js"></script>
	<script type="text/javascript" src="js/jquery-1.9.0.js"></script>
	<script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script>
	<script type="text/javascript" src="js/jquery.mobile-1.4.5.js"></script>
	<script> 
		function placeholderIsSupported() {
				test = document.createElement('input');
				return ('placeholder' in test);
			}
			

			$(document).on("pageshow", "[data-role='page']", function () {
			 $('div.ui-loader').hide();
			});

			$(document).ready(function() {
				placeholderSupport = placeholderIsSupported() ? 'placeholder' : 'no-placeholder';
				$('html').addClass(placeholderSupport);
				
				var content = $.mobile.getScreenHeight() - $(".ui-header").outerHeight() - $(".ui-footer").outerHeight() - $(".ui-content").outerHeight() + $(".ui-content").height();
                $(".ui-content").height(content);

				
				$('#mostrarTabla').submit(function(evento) {
					evento.preventDefault();
					var datos_formulario = $(this).serialize();
					$.ajax({
						url : 'mostrar.php',
						data : datos_formulario,
						type : 'POST',
						
						beforeSend : function() {
							$("#resultado").html('<img align="middle"  style="padding-left:150px;"  src="image/loader.GIF">');
						},
						success : function(datos) {
							$("#resultado").html(CreateTableView(datos, "CSSTableGenerator", true));
						}	
					});

				});
				
				$('#mostrarTablaCon').submit(function(evento) {
					evento.preventDefault();
					var datos_formulario = $(this).serialize();
					$.ajax({
						url : 'mostrarConCondicion.php',
						data : datos_formulario,
						type : 'POST',

						beforeSend : function() {
							$("#resultado").html('<img align="middle"  style="padding-left:150px;"  src="image/loader.GIF">');
						},
						success : function(datos) {
							$("#resultado").html(CreateTableView(datos, "CSSTableGenerator", true));
						}	
					});

				});
				
				$('#borrar').submit(function(evento) {
					evento.preventDefault();
					var datos_formulario = $(this).serialize();
					$.ajax({
						url : 'borrarTabla.php',
						data : datos_formulario,
						type : 'POST',
						success : function(datos) {
							$("#lnkDialogBo").click();
						}	
					});

				});
				
				$('#enviar').submit(function(evento) {
					evento.preventDefault();
					var datos_formulario = $(this).serialize();
					$.ajax({
						url : 'registro.php',
						data : datos_formulario,
						type : 'POST',
						success : function(datos) {
							$("#lnkDialogEnv").click();
						}	
					});

				});
				
				
			});
	</script>
</head>

<body>
	
	
	<div data-role="page">
		<div data-role="tabs" id="tabs">
		  <div data-role="navbar">
		    <ul>
		      <li><a href="#one" data-ajax="false" class="ui-btn-active">Principal</a></li>
		      <li><a href="#two" data-ajax="false">Info</a></li>
		      <li><a href="#three" data-ajax="false">Autores</a></li>
		      <li><a href="#mostrar" data-ajax="true">Tabla</a></li>
		    </ul>
		  </div>
		  <div id="one" class="ui-body-d ui-content">
		    <h1>First tab contents</h1>
		  </div>
		  <div id="two">
		    <ul data-role="listview" data-inset="true">
		        <li><a href="#">Acura</a></li>
		        <li><a href="#">Audi</a></li>
		        <li><a href="#">BMW</a></li>
		        <li><a href="#">Cadillac</a></li>
		        <li><a href="#">Ferrari</a></li>
		    </ul>
		  </div>
		  <div id="three" class="ui-body-d ui-content">
		    <h1>First tab contents</h1>
		  </div>
		  <div id="mostrar" class="ui-body-d ui-content">
		    <div id="registration-form">
				<div class='fieldset'>
					<legend>
						Productos
					</legend>
					<form action="registro.php" id="enviar" method="post" data-validate="parsley">
						<div class='row'>
							<label for='id'>Id del producto</label>
							<input type="text" placeholder="id" name='id' data-required="true" data-error-message="Id requirido!">
						</div>
						<div class='row'>
							<label for="nombre">Nombre</label>
							<input type="text" placeholder="nombre" name='nombre' data-required="true" data-type="name " data-error-message="Nombre requirido!">
						</div>
						<div class='row'>
							<label for="descripcion">Descripcion del producto</label>
							<input type="text" placeholder="descripcion" name='descripcion' data-required="true" data-error-message="descripcion requerida">
						</div>
						<div class='row'>
							<label for="precio">Precio</label>
							<input type="text" placeholder="precio" name='precio' data-required="true" data-error-message="Precio requerido!">
						</div>
						<div class='row'>
							<label for="stock">Stock</label>
							<input type="text" placeholder="stock" name='stock' data-required="true" data-error-message="Stock requerido!">
						</div>
	
						<input type="submit" value="Enviar datos">
					</form>
					<form action="borrarTabla.php" id="borrar" method="post" data-validate="parsley">
						<input type="submit" value="Borrar Tabla">
					</form>
					<form action="mostrarConCondicion.php" id="mostrarTablaCon" method="post" data-validate="parsley">
						<input type="submit" value="Mostrar precio">
						<input type="text" placeholder="insert value to show prices greater than this value" name='value' data-required="true" data-error-message="Valor requerido!">
					</form>
					<form action="mostrar.php"  id="mostrarTabla" method="post" data-validate="parsley">
						<input type="submit" value="Mostrar toda la tabla">
					</form>
	
					<form>
						<div id="resultado">
	
						</div>
					</form>
				</div>

		 	</div>
		 
		 
		  </div>
		</div>		
	</div><!-- /page -->
	<a id='lnkDialogEnv' href="#dialogEnviar" data-rel="dialog" data-transition="slidedown" style='display:none;'></a>
	<a id='lnkDialogBo' href="#dialogBorrar" data-rel="dialog" data-transition="slidedown" style='display:none;'></a>
	
	<div data-role="page" id="dialogEnviar">
	  <div data-role="header">
	    <h3>Mensaje</h3>
	  </div>    
	  <div data-role="content" >
	  	<p>Contenido enviado a la base de datos</p>
	  </div>   

	</div>
	
	<div data-role="page" id="dialogBorrar">
	  <div data-role="header">
	    <h3>Mensaje</h3>
	  </div>    
	  <div data-role="content" >
	  	<p>Borrado todo el contenido de la base de datos</p>
	  </div>   

	</div>
	

	

</body>
</html>