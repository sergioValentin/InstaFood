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
	
		<title>INSTAFOOD | REGISTRO</title>
	</head>
	<body>
	
	<?php

		include('conecBD.php'); 
		// Actualizamos en funcion del id que recibimos
		date_default_timezone_set('Europe/Madrid');
		$id_usuario = $_GET['id_usuario'];
		

		$query = "select * from usuarios where id_usuario = '".$id_usuario."'"; 
		$resultados = mysql_query($query); 


		$num_resultados = mysql_num_rows($resultados);
		$row = mysql_fetch_array($resultados);

		echo "<FORM align='left' method='POST' action='modificar_usuarios1.php'>
		<!--Aquí introducidos los campos necesarios para el registro en la página web-->
		<BR><BR><BR><BR><BR><BR><BR><FIELDSET>
		<LEGEND>Informacion de registro</LEGEND>";
		echo "<INPUT TYPE='hidden' NAME='id_usuario' VALUE='".$row['id_usuario']."' ><br>";
		echo "Usuario:<INPUT TYPE='text' NAME='usuario' VALUE='".$row['usuario']."' maxlength='30'REQUIRED='required' ><BR>";
		echo "Contrase&ntilde;a:<INPUT TYPE='PASSWORD' NAME='contrasenia' VALUE='".$row['contrasenia']."' maxlength='10' REQUIRED='required'><BR>";
		echo "Privilegio:";
		if($row['privilegio']=='1')
		{
			echo "<INPUT TYPE='radio' NAME='privilegio' VALUE='1' checked >Administrador<BR>";
			echo "<INPUT TYPE='radio' NAME='privilegio' VALUE='2'>Cliente<BR>";
		}
		if($row['privilegio']=='2')
		{
			echo "<INPUT TYPE='radio' NAME='privilegio' VALUE='1' >Administrador<BR>";
			echo "<INPUT TYPE='radio' NAME='privilegio' VALUE='2' checked >Cliente<BR>";
		}
		echo "Puntos:<INPUT TYPE='text' NAME='instapuntos'  VALUE='".$row['instapuntos']."' maxlength='5' REQUIRED='required'><BR>";
		echo "</FIELDSET>
		
		<BR><BR><FIELDSET>
		<LEGEND>Informacion personal</LEGEND>";
		echo "<BR>Nombre:<INPUT TYPE='text' NAME='nombre' maxlength='30' VALUE='".$row['nombre']."' REQUIRED='required'><BR>";
		echo "Apellidos:<INPUT TYPE='text' NAME='apellidos' maxlength='30' VALUE='".$row['apellidos']."' REQUIRED='required'><BR>";
		echo "DNI:<INPUT TYPE='text' NAME='dni' VALUE='".$row['dni']."' MAXLENGTH='9'><BR> <!--Con MAXLENGTH reducimos el número de caracteres que podemos introducir-->";
		echo "Fecha nacimiento:<INPUT TYPE='text' NAME='fecha' VALUE='".$row['fecha']."' REQUIRED='required'> ";
		echo "Sexo:";
		if($row['sexo']=='Hombre')
		{
			echo "<INPUT TYPE='radio' NAME='sexo' VALUE='Hombre' checked >Hombre<BR>";
			echo "<INPUT TYPE='radio' NAME='sexo' VALUE='Mujer'>Mujer<BR>";
		}
		if($row['sexo']=='Mujer')
		{
			echo "<INPUT TYPE='radio' NAME='sexo' VALUE='Hombre'>Hombre<BR>";
			echo "<INPUT TYPE='radio' NAME='sexo' VALUE='Mujer' checked>Mujer<BR>";
		}		

		echo "</FIELDSET>
		
		<BR><BR><FIELDSET>
		<LEGEND>Informacion de contacto</LEGEND>";
		echo "Telefono:<INPUT TYPE='tel' NAME='telefono' maxlength='9' VALUE='".$row['telefono']."' REQUIRED='required'><BR>";
		echo "Direccion:<INPUT TYPE='text' NAME='direccion' VALUE='".$row['direccion']."' maxlength='30'><BR>";
		echo "Codigo postal:<INPUT TYPE='text' NAME='cp' VALUE='".$row['cp']."' maxlength='5'><BR>";
		echo "Provincia:<INPUT TYPE='text' NAME='provincia' VALUE='".$row['provincia']."' maxlength='30' ><BR>";
		echo "Localidad:<INPUT TYPE='text' NAME='localidad' VALUE='".$row['localidad']."' maxlength='30'><BR>";
		echo "Correo electronico:<INPUT TYPE='email' NAME='email' VALUE='".$row['email']."' maxlength='20' REQUIRED='required'><BR><BR>
		</FIELDSET>
		<BR>		
		<!--Creamos un botón para enviar el formulario-->
		<center>";
		echo "<BUTTON NAME='envio' TYPE='submit' VALUE='Enviar datos' style='width:10%; height:10%' ALIGN='center'>Enviar <IMG SRC='../Imagenes/Formulario/enviar.png' width='20%' height='20%' ALIGN='center'></BUTTON>";
		
		//Creamos un botón para reiniciar el formulario-->
		echo "<BUTTON NAME='reiniciar' TYPE='RESET' style='width:10%; height:10%' ALIGN='center'>Reiniciar<IMG SRC='../Imagenes/Formulario/reiniciar.png' width='20%' height='20%' ALIGN='center'></BUTTON>
		</center>
		
		</FORM>";

	?>

</body>

</html> 