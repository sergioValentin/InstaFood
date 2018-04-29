
<?php
include('cabecera.php');
if($_SESSION['session_privilegio'] == 2)
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
			
			
			@$imagen= $_POST['imagen'];
			@$nombre = $_POST['nombre'];
			@$descripcion = $_POST['descripcion'];
			@$precio = $_POST['precio'];
			@$tipo = $_POST['tipo'];
		
			$imagen= trim($imagen);
			$nombre = trim($nombre);
			$descripcion = trim($descripcion);
			$precio = trim($precio);

			
			if(!$imagen||!$nombre||!$descripcion||!$precio||!$tipo){
				echo "No ha introducido todos los datos, por favor vuelva a la pagina anterior";
				exit();
			}
			
			$imagen = addslashes($imagen);
			$nombre = addslashes($nombre);
			$descripcion = addslashes($descripcion);
			$precio = addslashes($precio);
			
			$cadena = "../Imagenes/";
			$cadena1 = "/";
			$imagen = $cadena.$tipo.$cadena1.$imagen;
			
			include('conecBD.php');
			
			@$query = "INSERT INTO productos VALUES(null,'".$imagen."','".$nombre."','".$descripcion."',".$precio.",'".$tipo."')";
			$resultado = mysql_query($query);
			if($resultado){
				echo "<script type='text/javascript'>alert('Producto registrado correctamente'); location.href='gestion_tienda.php';</script>";
				// header("Location: gestion_tienda.php");
			}
			else {
				echo "<script type='text/javascript'>alert('El producto no se ha podido registrar correctamente. Vuelva a intentarlo');location.href='formulario_productos.php';</script>";
				
			}
		?>
	</body>
</html>