<?php 
	/*session_start();*/
	include ('cabecera.php');
	include('conecBD.php');
	$query=("select * from productos where tipo='Domicilio'");
?>
<html>
<head>
</head>

<body>

	<?php
		
	$resultados = mysql_query($query);
	$num_resultados = mysql_num_rows($resultados);

	
	
		for($i=0; $i<$num_resultados; $i++){
			$row = mysql_fetch_array($resultados);
			
			echo "<br><br>";
			echo "<div>";
			echo "<FORM align='left' method='POST' action='anadir_carrito.php'>";
			echo "<INPUT TYPE='hidden' NAME='id_producto' VALUE='".$row['id_producto']."'><br>";
			echo "<h1>"; echo stripslashes($row['nombre']); echo"</h1>";
			echo "<h3> Descripcion: ";echo stripslashes($row['descripcion']);echo"</h3>";
			echo "<h3> Precio: ";echo stripslashes($row['precio']);echo"</h3>";
			echo "<h3> Tipo: ";echo stripslashes($row['tipo']);	echo"</h3>";				
			echo "<BR>Cantidad:<INPUT TYPE='number' NAME='cantidad' MIN='0' MAX='20'><br>";
			echo '<IMG SRC=" '; echo stripslashes($row['imagen_producto']); 
			echo '" width="20%" height="30%">';
			echo "<BUTTON NAME='COMPRAR' TYPE='submit' style='width:10%; height:10%' ALIGN='center'><IMG SRC='../Imagenes/Logo/carrito.png' width='50%' height='50%' ALIGN='center'></a></BUTTON><BR><BR>";			
			echo "</FORM>";
			echo "</div>";
				
		}

	?>
	
	

 <table>


</body>
</html>


