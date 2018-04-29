<?php include 'cabecera.php'; 
if($_SESSION['session_privilegio']!= 1)
{
	
	echo "<script type='text/javascript'>alert('ACCESO RESTRINGIDO. Solo administradores.'); location.href='inicio.php';</script>";
	exit;
}
?>


<html>
	<head>
	
		<title>INSTAFOOD | MODIFICAR PRODUCTO</title>
	</head>
	<body>
	<?php 

		// Actualizamos en funcion del id que recibimos
		$id_producto = $_GET['id_producto'];

		include('conecBD.php');  

		$query = 'select * from productos where id_producto = ' . $id_producto; 
		$resultados = mysql_query($query); 

		$num_resultados = mysql_num_rows($resultados);
		$row = mysql_fetch_array($resultados);

		
		
		echo "<form align='left' method='POST' action='modificar_productos1.php'>
		<!--Aquí introducidos los campos necesarios para el registro en la página web-->
		<BR><BR><BR><BR><BR><BR><BR><FIELDSET>
		<LEGEND>Informacion de registro</LEGEND>";
		echo "<INPUT TYPE='hidden' NAME='id_producto' VALUE='".$row['id_producto']."' REQUIRED='required'><BR>";
		echo 'Imagen: <INPUT enctype="multipart/form-data" action="uploader.php" method="POST" name="imagen" type="file" maxlength="150" ><BR>';
		echo "Producto:<INPUT TYPE='text' NAME='nombre' VALUE='".$row['nombre']."' REQUIRED='required'><BR>";
		echo "Descripcion:<INPUT TYPE='text' NAME='descripcion'  VALUE='".$row['descripcion']."' ><BR>";
		echo "Precio:<INPUT TYPE='float' NAME='precio' VALUE='".$row['precio']."' maxlength='6'REQUIRED='required'><br>";
		echo "Tipo Comida:";
		if($row['tipo']=='Domicilio')
		{
			echo "<INPUT TYPE='radio' NAME='tipo' VALUE='Domicilio' checked>Comida a domicilio<BR>";
			echo "<INPUT TYPE='radio' NAME='tipo' VALUE='Fresca'>Alimentos sin cocinar<BR>";
		}
		if($row['tipo']=='Fresca')
		{
			echo "<INPUT TYPE='radio' NAME='tipo' VALUE='Domicilio' >Comida a domicilio<BR>";
			echo "<INPUT TYPE='radio' NAME='tipo' VALUE='Fresca' checked>Alimentos sin cocinar<BR>";
		}
		echo "</FIELDSET>";
		
		//Creamos un botón para enviar el formulario
		echo "<BR>";
		echo "<center>";
		echo "<BUTTON NAME='envio' TYPE='submit' VALUE='Enviar datos' style='width:10%; height:10%' ALIGN='center'>Enviar <IMG SRC='../Imagenes/Formulario/enviar.png' width='20%' height='20%' ALIGN='center'></BUTTON>";
		
		//Creamos un botón para reiniciar el formulario
		echo "<BUTTON NAME='reiniciar' TYPE='RESET' style='width:10%; height:10%' ALIGN='center'>Reiniciar<IMG SRC='../Imagenes/Formulario/reiniciar.png' width='20%' height='20%' ALIGN='center'></BUTTON>
		</center>
		
		</FORM>";

	?>

</body>

</html> 