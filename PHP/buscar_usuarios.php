<?php include 'cabecera.php'; ?>
<?php
if($_SESSION['session_privilegio']!= 1)
{
	
	echo "<script type='text/javascript'>alert('ACCESO RESTRINGIDO. Solo administradores.'); location.href='inicio.php';</script>";
	exit;
}
?>

<html>
	<head>
		<title>INSTAFOOD | BUSCAR USUARIOS</title>

		<script language="JavaScript">
		function obtenerHora(){
		horaActual = new Date()
		hora = horaActual.getHours()
		minuto = horaActual.getMinutes()
		segundo = horaActual.getSeconds()

		str_segundo = new String (segundo)
		if (str_segundo.length == 1)
		segundo = "0" + segundo

		str_minuto = new String (minuto)
		if (str_minuto.length == 1)
			minuto = "0" + minuto

			str_hora = new String (hora)
		if (str_hora.length == 1)
			hora = "0" + hora

			horaImprimible = hora + " : " + minuto + " : " + segundo

			document.reloj.hora.value = horaImprimible

			setTimeout("obtenerHora()",1000)
		}
		
	</script>

	</head>
	<body onload=obtenerHora()>
	
		<form name="reloj" align="right">
			<input id="reloj" name="hora" size="8"></form>
	
				<!--DENTRO DE ESTE RECUADRO INTRODUCIMOS EL LOGO DE NUESTRA PAGINA -->
				
		
		<?php //include 'cabecera.php'; ?>
		<br><br><br><br><br>
		  <form action="seleccionar_usuarios.php" method="post">
		  <table>
			<tr>
				<td>Elija tipo de búsqueda:</td>
				<td><select name="tipobusqueda">
					<option value="nombre">Nombre</option>
					<option value="apellidos">Apellidos</option>
					<option value="email">Email</option>
					<option value="telefono">Teléfono</option>
					<option value="direccion">Dirección</option>
					<option value="ciudad">Ciudad</option>
					</select></td>
			</tr>
			<tr>
				<td>Introduzca el término de búsqueda:</td>
				<td><input name="terminobusqueda" type="text"></td>
			</tr>
			<tr>
				<td colspan="2" align=center><input type="submit" value="Buscar"></td>
			</tr>
		   </table>
		  </form>

	</body>
</html>
	
	
	
	
	