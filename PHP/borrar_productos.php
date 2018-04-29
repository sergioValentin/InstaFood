<?php include 'cabecera.php'; 
if($_SESSION['session_privilegio']!= 1)
{
	
	echo "<script type='text/javascript'>alert('ACCESO RESTRINGIDO. Solo administradores.'); location.href='inicio.php';</script>";
	exit;
}
?>


<html>
	<head>
	
		<title>INSTAFOOD | BORRAR PRODUCTO</title>
	</head>
	<body>
	<?php //include 'cabecera.php'; ?>
	<?php

		// Actualizamos en funcion del id que recibimos
		$id_producto = $_GET['id_producto'];

		include('conecBD.php');  

		$query = "delete from productos where id_producto = ". $id_producto; 
		$resultados = mysql_query($query); 
		
		echo "<script type='text/javascript'>alert('Producto eliminado correctamente');location.href='gestion_tienda.php'</script>";
	?>

</body>

</html> 