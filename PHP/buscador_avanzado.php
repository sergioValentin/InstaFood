<html>
	<head>
	
		<title>INSTAFOOD | BUSCADOR PALABRA CLAVE</title>
	</head>
	<body>
	
		<?php include 'cabecera.php'; ?>
		<?php
		
		
		//Creamos la seleccion de usuarios
		@ $nombre=$_POST['nombre'];
		@ $descripcion=$_POST['descripcion'];
		@ $precio=$_POST['precio'];
		@ $tipo=$_POST['tipo'];
		@ $instapuntos=$_POST['instapuntos'];

		$nombre= trim($nombre);
		$descripcion= trim($descripcion);
		$precio= trim($precio);
		$tipo= trim($tipo);
		$instapuntos = trim($instapuntos);
		
		$nombre= addslashes($nombre);
		$descripcion= addslashes($descripcion);
		$precio= addslashes($precio);
		$tipo= addslashes($tipo);
		$instapuntos= addslashes($instapuntos);
  
		include('conecBD.php');

		$query = "select * from productos where nombre like '%".$nombre."%' AND descripcion like '%".$descripcion."%' AND tipo like '%".$tipo."%'";
		if($precio)
			$query = " AND precio < ".$precio;
		if($instapuntos)
			$query = " AND instapuntos < ".$instapuntos;
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