<!--Formulario de compra-->

<?php
	include("cabecera.php");
?>
	<HEAD>
	
	
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
	</HEAD>

	<BODY onload=obtenerHora(>
	
		<form name="reloj" align="right">
			<input id="reloj" name="hora" size="8"></form>
	
					<!--DENTRO DE ESTE RECUADRO INTRODUCIMOS EL LOGO DE NUESTRA PAGINA -->
		
		
		
		<?php
			include('conecBD.php');
			$usuario = $_POST['usuario'];
			$contrasenia = $_POST['contrasenia'];
			$coste_total = $_POST['coste_total'];
			$consulta="select * from usuarios where usuario = '".$usuario."' AND contrasenia='".$contrasenia."'" ;
			$query=mysql_query($consulta);
			$row=mysql_fetch_array($query);
		
		
		
		
		
		echo '<H1 class="Titulo" ALIGN="center"> FORMULARIO DE COMPRA<IMG SRC="../Imagenes/Formulario/domicilio2.png"  width="10%" height="15%"></H1>';
		
		echo '<audio src="../audio/caja.mp3" preload="auto" autoplay></audio>';
		include('calendario.php');	
		echo '<BR><BR><FIELDSET>
		<LEGEND>Informacion de contacto</LEGEND>';
		echo '<BR>Nombre: '.$row['nombre'];
		echo '<BR>Apellidos: '.$row['apellidos'];
		echo '<BR>Telefono: '.$row['telefono'];
		echo '<BR>Direccion:'.$row['direccion'];
		echo '<BR>Codigo postal: '.$row['cp'];
		echo '<BR>Provincia:'.$row['provincia'];
		echo '<BR>Localidad:'.$row['localidad'];
		echo '<BR>Correo electronico: '.$row['email'];
		echo '<BR><BR>
		</FIELDSET>';
		
		echo '<FORM NAME = "FORMULARIO COMPRA" method="POST" action="anadir_pedidos.php">';

		echo '<BR><BR><FIELDSET>
		<LEGEND>Metodo de pago</LEGEND>';
		echo '<BR><INPUT TYPE="hidden" name="id_usuario" value="'.$row['id_usuario'].'">';
		echo '<BR>Coste total del pedido: '.$coste_total;
		echo '<BR><INPUT TYPE="hidden" name="coste_total" value="'.$coste_total.'">';
		echo '$<BR><INPUT type="radio" name="metodo" value="Efectivo">Efectivo<br>';
		echo '<INPUT type="radio" name="metodo" value="Tarjeta">Tarjeta de Crédito<br>';
		$fecha = date('Y-m-d H:i:s');
		echo '<BR><INPUT TYPE="hidden" name="fecha" value="'.$fecha.'">';
	
		echo '</FIELDSET>
		
		<BR>		
		<!--Creamos un botón para enviar el formulario-->
		<center>';
		echo "<input TYPE='submit' VALUE='Enviar datos' style='width:10%; height:10%' >";		
		echo '</center>';
		echo "</FORM>";
		?>
	</BODY>
</HTML>



