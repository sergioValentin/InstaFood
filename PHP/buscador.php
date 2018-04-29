<?php include 'cabecera.php'; ?>
<html>
	<head>
		<title>INSTAFOOD | BUSCARDOR</title>
		
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
				
		<br><br><br><br><br>
		  <form action="buscador_clave.php" method="post">
		  <h1>BUSCARDOR PALABRAS CLAVE</h1>
		  <table>
			<tr>
				<br>
				<td>Introduzca el término de búsqueda:</td>
				<td><input name="terminobusqueda" type="text"></td>
			</tr>
			<tr>
				<td colspan="2" align=center><input type="submit" value="Buscar"></td>
			</tr>
		   </table>
		  </form>
		  
		  <br><br><br><br><br>
		  <form action="buscador_avanzado.php" method="post">
		  <h1>BUSCARDOR AVANZADO</h1>
		  <table>
			<tr>
				<br>
				Introduzca los término de búsqueda:
				<br><td>NOMBRE:
				<td><input name="nombre" type="text"></td>
				<br><td>DESCRIPCION:
				<td><input name="descripcion" type="text"></td>
				<br><td>PRECIO:
				<td><input name="precio" type="text"></td>
				<br><td>Tipo:
				<td><input name="tipo" type="text"></td>
			</tr>
			<tr>
				<td colspan="2" align=center><input type="submit" value="Buscar"></td>
			</tr>
		   </table>
		  </form>


	</body>
</html>