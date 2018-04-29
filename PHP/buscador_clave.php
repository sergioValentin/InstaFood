<html>
	<head>
	
		<title>INSTAFOOD | BUSCADOR PALABRA CLAVE</title>
	</head>
	<body>
	
		<?php include 'cabecera.php'; 
		
		
		//Creamos la seleccion de por buscador clave
		@ $terminobusqueda=$_POST['terminobusqueda'];

		$terminobusqueda= trim($terminobusqueda);
  
		
		$terminobusqueda = addslashes($terminobusqueda);
  
		include('conecBD.php');

		$query = "select * from productos where nombre like '%".$terminobusqueda."%' OR descripcion like '%".$terminobusqueda."%' OR precio like '%".$terminobusqueda."%' OR tipo like '%".$terminobusqueda."%'";
		$resultados = mysql_query($query);
		$num_resultados = mysql_num_rows($resultados);
	
		echo "<br><br><br>";
		echo "<TABLE BORDER=1>";
		echo "<TR>";	
		echo "<TD>imagen</TD><TD>NOMBRE</TD><TD>DESCRIPCION</TD><TD>PRECIO</TD><TD>TIPO</TD>";
		echo "</TR>";
			
		for($i=0; $i<$num_resultados; $i++){
			$row = mysql_fetch_array($resultados);

			echo "<TR>";
			echo "<TD>";
			echo $row['imagen_producto'];
			echo "</TD>";
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
			echo stripslashes($row['tipo']);
			echo "</TD>";
			echo "</TR>";
		}
		echo "</TABLE>";
		
	?>
	</body>
</html>