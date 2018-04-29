
<html>
	<head>
	
		<title>INSTAFOOD | REGISTRO</title>
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

		$query = "select * from usuarios where ".$tipobusqueda." like '%".$terminobusqueda."%'";
		$resultados = mysql_query($query);
		$num_resultados = mysql_num_rows($resultados);
	
		echo "<br><br><br><br>";
		echo "<TABLE BORDER=1>";
		echo "<TR>";	
		echo "<TD>NOMBRE</TD><TD>APELLIDOS</TD><TD>EMAIL</TD><TD>TELEFONO</TD><TD>DOMICILIO</TD><TD>LOCALIDAD</TD><TD>PUNTOS</TD><TD>BORRAR</TD><TD>MODIFICAR</TD><TD>VER</TD>";
		echo "</TR>";
			
		for($i=0; $i<$num_resultados; $i++){
			$row = mysql_fetch_array($resultados);

			echo "<TR>";	
			echo "<TD>";
			echo stripslashes($row['nombre']);
			echo "</TD>";

			echo "<TD>";
			echo stripslashes($row['apellidos']);
			echo "</TD>";
			echo "<TD>";
			echo stripslashes($row['email']);
			echo "</TD>";
			echo "<TD>";
			echo stripslashes($row['telefono']);
			echo "</TD>";
			echo "<TD>";
			echo stripslashes($row['direccion']);
			echo "</TD>";
			echo "<TD>";
			echo stripslashes($row['localidad']);
			echo "</TD>";
			echo "<TD>";
			echo stripslashes($row['instapuntos']);
			echo "</TD>";
			echo "<TD>";
			echo "<A HREF='borrar_usuarios.php?id_usuario=".$row['id_usuario']."'><img src='../Imagenes/borrar.png' width='10%' heigth='10%'/>Borrar</A>";
			echo "</TD>";
			echo "<TD>";
			echo "<A HREF='modificar_usuarios.php?id_usuario=".$row['id_usuario']."'><img src='../Imagenes/modificar.png' width='5%' heigth='5%'/>Modificar</A>";
			echo "</TD>";
			echo "<TD>";
			echo "<A HREF='verUsuarios.php?id_usuario=".$row['id_usuario']."'><img src='../Imagenes/ojo.png' width='5%' heigth='5%'/>Ver</A>";
			echo "</TD>";
			echo "</TR>";
		}
		echo "</TABLE>";
		
	?>
	</body>
</html>
