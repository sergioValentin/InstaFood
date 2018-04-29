<html>
	<head>
	
		<title>INSTAFOOD | SELECCIONAR PRODUCTOS</title>
	</head>
	<body>
	
		<?php include 'cabecera.php'; ?>
		<?php
		
		
		//Creamos la seleccion de usuarios
		@ $terminobusqueda=$_POST['terminobusqueda'];
		@ $tipobusqueda=$_POST['tipobusqueda'];

		$terminobusqueda= trim($terminobusqueda);
  
		if (!$tipobusqueda || !$terminobusqueda)
		{
			echo 'No ha introducido correctamente los parámetros de búsqueda. Por favor, vuelva a la página anterior e introduzcalos.';
			exit;
		}
		$terminobusqueda = addslashes($terminobusqueda);
  
		include('conecBD.php');

		$query = "select * from productos where ".$tipobusqueda." like '%".$terminobusqueda."%'";
		$resultados = mysql_query($query);
		$num_resultados = mysql_num_rows($resultados);
	
		echo "<br><br><br>";
		echo "<TABLE BORDER=1>";
		echo "<TR>";	
		echo "<TD>NOMBRE</TD><TD>DESCRIPCION</TD><TD>PRECIO</TD><TD>BORRAR</TD><TD>MODIFICAR</TD>";
		echo "</TR>";
			
		for($i=0; $i<$num_resultados; $i++){
			$row = mysql_fetch_array($resultados);

			echo "<TR>";	
			echo "<TD>";
			echo stripslashes($row['nombre']);
			echo "</TD>";

			echo "<TD>";
			echo stripslashes($row['descripcion']);
			echo "</TD>";
			echo "<TD>";
			echo stripslashes($row['precio']);
			echo "</TD>";
			echo "<TD>";
			echo "<A HREF='borrar_productos.php?id_producto=".$row['id_producto']."'><img src='../Imagenes/borrar.png' width='10%' heigth='10%'/>Borrar</A>";
			echo "</TD>";
			echo "<TD>";
			echo "<A HREF='modificar_productos.php?id_producto=".$row['id_producto']."'><img src='../Imagenes/modificar.png' width='5%' heigth='5%'/>Modificar</A>";
			echo "</TD>";
			echo "</TR>";
		}
		echo "</TABLE>";
		
	?>
	</body>
</html>