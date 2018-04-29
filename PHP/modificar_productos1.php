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
			@$id_producto = $_POST['id_producto'];
			
			@$imagen= $_POST['imagen'];
			@$nombre = $_POST['nombre'];
			@$descripcion = $_POST['descripcion'];
		
			@$precio = $_POST['precio'];
			@$tipo = $_POST['tipo'];
		
			//$id_producto = trim($id_producto);
			$imagen= trim($imagen);
			$nombre = trim($nombre);
			$descripcion = trim($descripcion);
			$precio = trim($precio);

			
			if(!$imagen||!$nombre||!$descripcion||!$precio||!$tipo){
				echo "No ha introducido todos los datos, por favor vuelva a la pagina anterior";
				exit();
			}
			
			//$id_producto = addslashes($id_producto);
			$imagen = addslashes($imagen);
			$nombre = addslashes($nombre);
			$descripcion = addslashes($descripcion);
			$precio = addslashes($precio);
			
			$cadena = "../Imagenes/";
			$cadena1 = "/";
			$imagen = $cadena.$tipo.$cadena1.$imagen;
			
			include('conecBD.php');
			
			@$query = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio' WHERE id_producto='$id_producto'"; 
			$resultado = mysql_query($query);
			if($resultado){
				echo "<script type='text/javascript'>alert('Producto registrado correctamente'); location.href='gestion_tienda.php';</script>";

			}
			else {
				echo "<script type='text/javascript'>alert('El producto no se ha podido registrar correctamente. Vuelva a intentarlo');location.href: 'buscar_productos.php'</script>";
			}
		?>
	</body>
</html>