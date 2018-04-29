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
	
		<title>INSTAFOOD | BORRAR USUARIOS</title>
	</head>
	<body>
	<?php

		$id_usuario = $_GET['id_usuario'];

		include('conecBD.php');  

		$query = "delete from usuarios where id_usuario = " . $id_usuario; 
		$resultados = mysql_query($query); 
		
		echo "<script type='text/javascript'>alert('Usuario eliminado correctamente');location.href='gestion_clientes.php'</script>";
	?>

</body>

</html> 