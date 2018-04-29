
<!--Ctalogo general de la tienda de alimentación-->
<!--Comienza el código html--> 

<html>
	<head>
	<title>INSTAFOOD | CATALOGO</title>
	
</SCRIPT>
			
	<script language="JavaScript">     <!--Esta función en JavaScript, se encarga de obtener la hora, minutos y segundos actuales -->
		function obtenerHora(){
		horaActual = new Date()
		hora = horaActual.getHours()
		minuto = horaActual.getMinutes()
		segundo = horaActual.getSeconds()

		str_segundo = new String (segundo)
		if (str_segundo.length == 1)
		segundo = "0" + segundo

		str_minuto = new String (minuto)
		if (str_minuto.length == 1)
			minuto = "0" + minuto

			str_hora = new String (hora)
		if (str_hora.length == 1)
			hora = "0" + hora

			horaImprimible = hora + " : " + minuto + " : " + segundo

			document.reloj.hora.value = horaImprimible

			setTimeout("obtenerHora()",1000)
		}
	</script>
	
	</head>
	
	
	<!--Comienza el cuerpo de la página -->
	<!--En el momento en el que abre la página, inmediatamente obtiene la hora, a través de su correspondiente llamada -->
	<body onload=obtenerHora()>
	
		<form name="reloj" align="right">
			<input id="reloj" name="hora" size="8"></form>
	
			<!--DENTRO DE ESTE RECUADRO INTRODUCIMOS EL LOGO DE NUESTRA PAGINA -->
		<?php include 'cabecera.php'; ?>
		
		
		
<!-- 		MENU CON LAS DIFERENTES SECCIONES DEL CATALOGO -->
		<H1> <BR><BR>  CATALOGO DE ALIMENTOS </H1>
		<P> <h3>¡BIENVENID@ al catalogo de nuestra tienda!</h3> <BR>Selecione una categoria del menú desplegable o de esta lista y empieza a disfrutar de una <strong>comida</strong> de calidad y a tu gusto: <BR><p>
		<ul>
					<li type="circle"><a href="comida_fresca.php">Comida Fresca</a></li>
					<li type="circle"><a href="comida_domicilio.php">Comida Domicilio</a></li>
					
	
				</ul>
		<IMG SRC="../Imagenes/comida.jpg" width="100%" height="100%" ALIGN="center" >
		
	</body>
</html>


<?php

?>


