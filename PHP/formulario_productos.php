<?php include 'cabecera.php'; 
if($_SESSION['session_privilegio']!= 1)
{
	
	echo "<script type='text/javascript'>alert('ACCESO RESTRINGIDO. Solo administradores.'); location.href='inicio.php';</script>";
	exit;
}
?>

<html>
	<head>
	<title>INSTAFOOD | FORMULARIO DE PRODUCTOS</title>
		
			
			
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
		
		<form align="left" method='POST' action='introducir_productos.php'>
		<!--Aquí introducidos los campos necesarios para el registro en la página web-->
		<BR><BR><BR><BR><BR><BR><BR><FIELDSET>
		<LEGEND>Informacion de registro</LEGEND>
		Imagen: <INPUT enctype="multipart/form-data" action="uploader.php" method="POST" name="imagen" type="file" maxlength="150" ><BR>
		Producto:<INPUT TYPE="text" NAME="nombre" placeholder="pechuga pollo" maxlength="30" REQUIRED="required"><BR>
		Descripcion:<INPUT TYPE="text" NAME="descripcion"maxlength="60"  placeholder="Pechuga de pollo fresca" REQUIRED="required"><BR>
		Precio:<INPUT TYPE="float" NAME="precio" placeholder="10.75" maxlength="6"REQUIRED="required"><BR>
		Tipo Comida:
		<INPUT TYPE="radio" NAME="tipo" VALUE="Domicilio">Comida a domicilio<BR>
		<INPUT TYPE="radio" NAME="tipo" VALUE="Fresca">Alimentos sin cocinar<BR>
		</FIELDSET>
		
		<br><br>
		<!--Creamos un botón para enviar el formulario-->
		<center>
		<BUTTON NAME="envio" TYPE="submit" VALUE="Enviar datos" style='width:10%; height:10%' ALIGN="center">Enviar <IMG SRC="../Imagenes/Formulario/enviar.png" width="20%" height="20%" ALIGN="center"></BUTTON>
		
		<!--Creamos un botón para reiniciar el formulario-->
		<BUTTON NAME="reiniciar" TYPE="RESET" style='width:10%; height:10%' ALIGN="center">Reiniciar<IMG SRC="../Imagenes/Formulario/reiniciar.png" width="20%" height="20%" ALIGN="center"></BUTTON>
		</center>
		
		</FORM>
	</body>
</html>
<?php

?>