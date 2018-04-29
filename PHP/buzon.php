<!--Página de ayuda de la tienda de alimentación-->
<!--Comienzo de la pagina -->

<HTML>
	<!--Comienzo de la cabecera -->
	<HEAD>
		<!--Titulo de la página -->
		<TITLE>INSTAFOOD | BUZON SUGERENCIAS</TITLE>
		
		<!--Esta función en JavaScript, se encarga de obtener la hora, minutos y segundos actuales -->
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
	
	<!--Comprobamos que la dirección de email introducida es válida-->
			<SCRIPT TYPE="text/javascript">
				function validarEmail(direccion){
				if(direccion.indexOf("@")!=-1)
					return true;
				else{
					alert('Direccion de email invalida');
					return false;
				}
				}
			</SCRIPT>
	
	</HEAD><!--Fin de la cabecera-->
	<!--Comienzo del cuerpo, el cual carga la hora inmediatamente -->
	<BODY onload=obtenerHora()>
	
	<!--Mostramos la hora -->
		<form name="reloj" align="right">
			<input id="reloj" name="hora" size="8"></form>
	
			<!--DENTRO DE ESTE RECUADRO INTRODUCIMOS EL LOGO DE NUESTRA PAGINA -->
	<?php include 'cabecera.php'; ?>
		
		</center>
		
		<!--Descripción de la pagina, con un formulario para introducir sus datos y un cuadro de texto para introducir la sugerencia-->
		
		<BR><BR><BR>
		<center><h1>¡BIENVENIDOS A NUESTRO BUZON DE SUGERENCIAS!</h1></center>
		<BR><BR>
		<h2>Cada día nos gusta mejorar para ofreceros lo mejor de nosotros</h2>
		<h2>Por ello, estamos encantados de recibir cualquier tipo de aportación.</h2>
		<h2>¡Muchas gracias!</h2>
		
		<!--<BR><BR><FIELDSET>
		<LEGEND><h2>DATOS</h2></LEGEND>
		Usuario:<INPUT TYPE="text" NAME="usuario" placeholder="usuario01" REQUIRED="required"><BR>
		Contrase&ntilde;a:<INPUT TYPE="PASSWORD" NAME="contrasella" placeholder="xxxxxxxx" REQUIRED="required"><BR>
		</FIELDSET>-->
		
		<BR><BR>
		<form name="ayuda">
			<center><textarea rows="15" cols="100" wrap="hard" placeholder="Por favor, introduzca aqui su sugerencia..."></textarea><center>
		</form>
		<BR><BR>
		
		<?php if(!isset($_SESSION['session_usuario']))
	{
		
		echo '<center>'
		echo "Inicia sesión para enviar sugerencia";
		echo '</center>';
	}
	else{ ?>
		<center><button name="enviar" type="reset" onclick="parent.location='mailto:sergiova1995@gmail.com'">Enviar</button></center>
	<?php }?>
	</BODY><!--Fin del cuerpo-->

</HTML><!--Fin-->


<?php

?>

