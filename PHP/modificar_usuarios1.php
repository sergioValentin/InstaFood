<?php include 'cabecera.php'; 
if($_SESSION['session_privilegio']!= "1")
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
			
			@$id_usuario = $_POST['id_usuario'];
			@$usuario = $_POST['usuario'];
			@$contrasenia = $_POST['contrasenia'];
			@$nombre = $_POST['nombre'];
			@$apellidos = $_POST['apellidos'];
			@$fecha = $_POST['fecha'];
			@$dni = $_POST['dni'];
			@$sexo = $_POST['sexo'];
			@$telefono = $_POST['telefono'];
			@$direccion = $_POST['direccion'];
			@$cp = $_POST['cp'];
			@$localidad = $_POST['localidad'];
			@$provincia = $_POST['provincia'];
			@$email = $_POST['email'];
			@$privilegio= $_POST['privilegio'];
			@$instapuntos= $_POST['instapuntos'];
			
			$id_usuario = trim($id_usuario);
			$usuario = trim($usuario);
			$contrasenia = trim($contrasenia);
			$nombre = trim($nombre);
			$apellidos = trim($apellidos);
			$dni = trim($dni);
			$fecha = trim($fecha);
			$telefono = trim($telefono);
			$direccion = trim($direccion);
			$cp = trim($cp);
			$localidad = trim($localidad);
			$provincia = trim($provincia);
			$email = trim($email);
			$instapuntos = trim($instapuntos);
			
			if(!$usuario||!$contrasenia||!$nombre||!$apellidos||!$fecha||!$telefono||!$email||!$instapuntos){
				echo "No ha introducido todos los datos, por favor vuelva a la pagina anterior";
				exit();
			}
			
			
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
			
			$arrayFecha = explode('-',$fecha);
			if(checkdate($arrayFecha[0],$arrayFecha[1],$arrayFecha[2])==1){
				echo "<script type='text/javascript'>alert('Fecha de nacimiento incorrecta');location.href='buscar_usuarios.php'</script>";
			}
			
			include('conecBD.php');
			
		
			$query = "UPDATE usuarios SET usuario='$usuario', contrasenia='$contrasenia', nombre='$nombre', apellidos='$apellidos', dni='$dni', telefono='$telefono', direccion='$direccion', cp='$cp', localidad='$localidad', provincia='$provincia', email='$email', instapuntos='$instapuntos', privilegio='$privilegio' WHERE id_usuario='$id_usuario'";
		  
			$resultado = mysql_query($query);
			if($resultado){
				echo "<script type='text/javascript'>alert('Usuario modificado correctamente');'</script>";
			}
			else {
				echo "<script type='text/javascript'>alert('Usuario incorrecto');location.href: 'buscar_usuarios.php'</script>";
			}
		?>
	</body>
</html>