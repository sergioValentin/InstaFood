<?php
//Creamos la conexion a la base de datos 
	 // $hostDB = "vulcano.tel.uva.es";
	 // $loginDB = "ldst008";
	 // $passDB = "w82h47rc";
	 // $nameDB = "ldst008";

	$hostDB = "localhost";
	$loginDB = "root";
	$passDB = "";
	$nameDB = "instafood"; 
		
	@ $db = mysql_pconnect($hostDB,$loginDB,$passDB);
	if(!$db){
		echo "El servidor no se encuentra disponible en estos momentos.";
		echo "<br>";
		echo "Disculplen las molestias.";
		exit();
	}
	mysql_select_db($nameDB);
?>
	