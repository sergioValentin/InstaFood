<?php include 'cabecera.php'; 

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
			
		<h1><a href="formulario_admin.php"> Introducir clientes </a> Introducir clientes desde el lado del administrador, a parte de las características habituales se permiten seleccionar la prioridar de los nuevos usuarios. </h1>
		<h1><a href="buscar_usuarios.php"> Buscar clientes </a> Buscador de clientes, por si queremos realizar modificaciones o eliminar alguno de ellos. </h1>
	
	</body>
	
</html>