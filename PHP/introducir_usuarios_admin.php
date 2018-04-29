
<?php

include('cabecera.php');
if($_SESSION['session_privilegio']!= 1)
{
	
	echo "<script type='text/javascript'>alert('ACCESO RESTRINGIDO. Solo administradores.'); location.href='inicio.php';</script>";
	exit;
}
?>


<html>
	<head>
	</head>
	<body>
		<?php
			//Fichero para introducir los usarios
		
			
			@$usuario = $_POST['usuario'];
			@$contrasenia = $_POST['contrasenia'];
			@$nombre = $_POST['nombre'];
			@$apellidos = $_POST['apellidos'];
			@$dni = $_POST['dni'];
			@$dia = $_POST['dia'];
			@$mes = $_POST['mes'];
			@$anio = $_POST['anio'];
			@$sexo = $_POST['sexo'];
			@$telefono = $_POST['telefono'];
			@$direccion = $_POST['direccion'];
			@$cp = $_POST['cp'];
			@$localidad = $_POST['localidad'];
			@$provincia = $_POST['provincia'];
			@$email = $_POST['email'];
			$privilegio = $_POST['privilegio'];
			@$instapuntos = $_POST['instapuntos'];
			
			$usuario = trim($usuario);
			$contrasenia = trim($contrasenia);
			$nombre = trim($nombre);
			$apellidos = trim($apellidos);
			$dni = trim($dni);
			$dia = trim($dia);
			$mes = trim($mes);
			$anio = trim($anio);
			$telefono = trim($telefono);
			$direccion = trim($direccion);
			$cp = trim($cp);
			$localidad = trim($localidad);
			$provincia = trim($provincia);
			$email = trim($email);
			
			
			if(!$usuario||!$contrasenia||!$nombre||!$apellidos||!$dni||!$dia||!$mes||!$anio||!$sexo||!$telefono||!$direccion||!$cp||!$localidad||!$provincia||!$email||!$privilegio||!$instapuntos){
				echo "No ha introducido todos los datos, por favor vuelva a la pagina anterior";
				exit();
			}
			
			$fecha=$anio.'-'.$mes.'-'.$dia;
			$usuario = addslashes($usuario);
			$contrasenia = addslashes($contrasenia);
			$nombre = addslashes($nombre);
			$apellidos = addslashes($apellidos);
			$dni = addslashes($dni);
			$fecha = addslashes($fecha);
			$telefono = addslashes($telefono);
			$direccion = addslashes($direccion);
			$cp = addslashes($cp);
			$localidad = addslashes($localidad);
			$provincia = addslashes($provincia);
			$email = addslashes($email);
			$instapuntos = addslashes($instapuntos);
			
			include('conecBD.php');
			
			$query = "INSERT INTO usuarios VALUES(null,'".$usuario."','".$contrasenia."','".$nombre."','".$apellidos."','".$dni."','".$fecha."','".$sexo."','".$telefono."','".$direccion."',".$cp.",'".$localidad."','".$provincia."','".$email."','".$instapuntos."',".$privilegio.")";
			$resultado = mysql_query($query);
			if($resultado){
				echo "<script type='text/javascript'>alert('Usuario registrado correctamente');location.href='gestion_clientes.php'</script>";
			}
			else {
				echo "<script type='text/javascript'>alert('No se ha podido registrar');location.href='javascript:history.go(-1)'</script>";
			}
		?>
	</body>
</html>