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
	
		<title>INSTAFOOD | VER USUARIO</title>
	</head>
	<body>
	
	<?php

		include('conecBD.php'); 
		// Actualizamos en funcion del id que recibimos
		$id_usuario = $_GET['id_usuario'];
		

		$query = "select * from usuarios where id_usuario = '".$id_usuario."'"; 
		$resultados = mysql_query($query); 


		$num_resultados = mysql_num_rows($resultados);
		$row = mysql_fetch_array($resultados);

		
		echo "<!--Aquí introducidos los campos necesarios para el registro en la página web-->
		<BR><BR><BR>";
		echo "<FIELDSET>
		<LEGEND>Informacion de registro</LEGEND>";
		echo "<INPUT TYPE='hidden' NAME='id_usuario' VALUE='".$row['id_usuario']."'><br>";
		echo 'Usuario: '.$row['usuario'];
		echo '<br>';
		echo '<br>Contrase&ntilde;a: '.$row['contrasenia'];
		echo "<br>Privilegio:";
		if($row['privilegio']=='1')
		{
			echo "Administrador";
		
		}
		if($row['privilegio']=='2')
		{
			echo "Cliente";
		}
		echo '<br>Puntos: '.$row['instapuntos'];
		echo "</FIELDSET>
		
		<BR><BR><FIELDSET>
		<LEGEND>Informacion personal</LEGEND>";
		echo '<br>Nombre: '.$row['nombre'];
		echo '<br>Apellitods: '.$row['apellidos'];
		echo '<br>DNI: '.$row['dni'];
		echo '<br>Fecha nacimiento: '.$row['fecha'];
		echo "<br>Sexo:".$row['sexo'];	

		echo "</FIELDSET>
		
		<BR><BR><FIELDSET>
		<LEGEND>Informacion de contacto</LEGEND>";
		echo '<br>Telefono: '.$row['telefono'];
		echo '<br>Direccion: '.$row['direccion'];
		echo '<br>Codigo postal: '.$row['cp'];
		echo '<br>Provincia: '.$row['provincia'];
		echo '<br>Localidad: '.$row['localidad'];
		echo '<br>Correo: '.$row['email'];
		echo '</FIELDSET>
		<BR>';

	?>

</body>

</html> 