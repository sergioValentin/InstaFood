<?php include 'cabecera.php'; ?>
<?php
if($_SESSION['session_privilegio']!= 1)
{
	
	echo "<script type='text/javascript'>alert('ACCESO RESTRINGIDO. Solo administradores.'); location.href='inicio.php';</script>";
	exit;
}
?>
<html>
	<!--Comienza la cabecera del cógido html -->
	<head>
	
	
	</head><!--Fin de la cabecera -->
	
	<!--Comienza el cuerpo de la página -->
	<!--En el momento en el que abre la página, inmediatamente obtiene la hora, a través de su correspondiente llamada -->
	<body onload=obtenerHora()>
		<!--Mostramos la hora -->
		<form name="reloj" align="right">
			<input id="reloj" name="hora" size="8"></form>		
		
		
		<h1><a href="formulario_productos.php"> Introducir productos </a> Introducir productos en la base de datos de la tienda para que los clientes puedan comprar nuevos alimentos. </h1>
		<h1><a href="buscar_productos.php"> Buscar productos </a> Buscador de productos, por si queremos realizar modificaciones o eliminar alguno de ellos. </h1>
	
	</body>
	
</html>