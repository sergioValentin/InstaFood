<?php include 'cabecera.php'; ?>
<html>
	<head>
	<title>INSTAFOOD | REGISTRO</title>

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
			
			<!--Comprobamos que el usuario ha introducido todos los datos necesarios para el registro-->
			<SCRIPT TYPE="text/javascript">
				function validarEdad(edad){
				if(edad.value>='1998')
					return true;
				else{
					alert("Debe usted ser mayor para registrarse en esta plataforma");
					return false;
				}
				}
			</SCRIPT>
			
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
			
		
		<form align="left" method='POST' action='introducir_usuarios.php'>
		<!--Aquí introducidos los campos necesarios para el registro en la página web-->
		<BR><BR><BR><BR><BR><BR><BR><FIELDSET>
		<LEGEND>Informacion de registro</LEGEND>
		Usuario:<INPUT TYPE="text" NAME="usuario" placeholder="usuario01" maxlength="30" REQUIRED="required"><BR>
		Contrase&ntilde;a:<INPUT TYPE="PASSWORD" NAME="contrasenia" placeholder="xxxxxxxx" maxlength="10" REQUIRED="required"><BR>
		<input type="hidden" name="instapuntos" value="0" ><BR>
		</FIELDSET>
		
		<BR><BR><FIELDSET>
		<LEGEND>Informacion personal</LEGEND>
		<BR>Nombre:<INPUT TYPE="text" NAME="nombre" placeholder="Pepita" maxlength="30" REQUIRED="required"><BR>
		Apellidos:<INPUT TYPE="text" NAME="apellidos" maxlength="30" placeholder="Barroso"  REQUIRED="required"><BR>
		DNI:<INPUT TYPE="text" NAME="dni" MAXLENGTH="9" placeholder="77777777X" ><BR> <!--Con MAXLENGTH reducimos el número de caracteres que podemos introducir-->
		Fecha nacimiento:<INPUT TYPE="number" NAME="dia" MIN="1" MAX="31" placeholder="1"  REQUIRED="required"> <INPUT TYPE="number" NAME="mes" MIN="1" MAX="12" placeholder="1" REQUIRED="required"> <INPUT TYPE="number" NAME="anio" MIN="1900" MAX="2017" placeholder="1999"  REQUIRED="required"><BR>
		Sexo:
		<INPUT TYPE="radio" NAME="sexo" VALUE="Hombre">Hombre<BR>
		<INPUT TYPE="radio" NAME="sexo" VALUE="Mujer">Mujer<BR>
		</FIELDSET>
		
		<BR><BR><FIELDSET>
		<LEGEND>Informacion de contacto</LEGEND>
		Telefono:<INPUT TYPE="tel" NAME="telefono" maxlength="12" placeholder="666666666" REQUIRED="required"><BR>
		Direccion:<INPUT TYPE="text" NAME="direccion" maxlength="30" placeholder="Camino del Cementerio" ><BR>
		Codigo postal:<INPUT TYPE="text" NAME="cp" maxlength="5" placeholder="47011" ><BR>
		Provincia:<INPUT TYPE="text" NAME="provincia" maxlength="30" placeholder="Valladolid" ><BR>
		Localidad:<INPUT TYPE="text" NAME="localidad" maxlength="30" placeholder="Valladolid" ><BR>
		Correo electronico:<INPUT TYPE="email" NAME="email" maxlength="20" placeholder="usuario01@servidor.com" REQUIRED="required"><BR><BR>
		</FIELDSET>
		<BR>		
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