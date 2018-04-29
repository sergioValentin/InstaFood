
<html>
	<!--Comienza la cabecera del cógido html -->
	<head>
	<!--Ponemos el título de la página -->
	<title>INSTAFOOD | COMIDA Y MÁS</title>
	
	<meta name=”viewport” content=”width=device-width, initial-scale=1.0, maximum-scale=1 user-scalable=no">
	
	<!--Esta función en JavaScript, se encarga de obtener la hora, minutos y segundos actuales -->
	<script language="JavaScript">
		function obtenerHora(){
		horaActual = new Date()
		hora = horaActual.getHours()	/*Obtenemos horas, minutos y segundos*/
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

			horaImprimible = hora + " : " + minuto + " : " + segundo	/*Mostramos hora*/

			document.reloj.hora.value = horaImprimible

			setTimeout("obtenerHora()",1000)				/*Obtenemos hora cada 1000ms, es decir 1 segundo*/
		}
	</script>
	
	
		<script>		/*Codigo Ajax, que emuestra la informacion de 2 personas*/
			function loadDoc(){
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
					document.getElementById("demo").innerHTML = this.responseText;
					}
				};
				xhttp.open("GET", "informacion.xml", true);
				xhttp.send();
			}
		</script>
		
	
	</head><!--Fin de la cabecera -->
	
	<!--Comienza el cuerpo de la página -->
	<!--En el momento en el que abre la página, inmediatamente obtiene la hora, a través de su correspondiente llamada -->
	<body onload=obtenerHora()>
		<!--Mostramos la hora -->
		<form name="reloj" align="right">
			<input id="reloj" name="hora" size="8"></form>
			
			<div id="TT_viz11kE1E4lcKeGKjAzjDDjzjWuKMKS2bdEdkZy5akjImImI3">Pronóstico de tiempo</div>
<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_viz11kE1E4lcKeGKjAzjDDjzjWuKMKS2bdEdkZy5akjImImI3"></script>
	
				
		<?php include 'cabecera.php'; ?>
		
	
		<div id="slider"> <!-- Slider que muestra 3 imagenes en movimiento -->
		<a href="../PHP/formulario.php"><IMG SRC="../Imagenes/Inicio/CTA.jpg" width="30%" height="30%" align="right"></a> <!-- LLamada a la accion para que el usuario se registre -->
		<img class="imagenMov" src="../Imagenes/Slider/foto1.jpg" alt="FotoSlider, comida sabrosa en Instafood"style="width:50% height:50%">
		<img class="imagenMov" src="../Imagenes/Slider/foto2.jpg" alt="FotoSlider, foto motivadora en Instafood"style="width:50% height:50%">
		<img class="imagenMov" src="../Imagenes/Slider/foto3.jpg" alt="FotoSlider, ofertas, comida al mejor precio en Instafood"style="width:50% height:50%">
		
		</div>

		<script>
		var myIndex = 0;
		carousel();

		function carousel() {     <!-- Funcion empleada para que se muevan las imagenes -->
			var i;
			var x = document.getElementsByClassName("imagenMov");
			for (i = 0; i < x.length; i++) {
			   x[i].style.display = "none";
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}
			x[myIndex-1].style.display = "block";
			setTimeout(carousel, 3000);  <!-- Cambiamos la imagen cada 3000ms, es decir 3 segundos -->
		}
		</script>
		
		
		
		<!--DENTRO DE ESTE RECUADRO INTRODUCIMOS LA INFORMACION DE NUESTRA PAGINA -->
		<BR><BR><BR>
		<P id="objetivos">
		<IMG SRC="../Imagenes/mapaImagen.jpg" ALT="mapaImagen" width="45%" height="45%" USEMAP="#comida" ALIGN="right"> <!-- MAPA DE IMAGENES -->
		<MAP NAME="comida">	
		<AREA SHAPE="circle" COORDS="380,10,110" HREF="../PHP/formulario.php">	<!-- Fijamos las coordenadas de las distintas zonas seleccionables -->
		<AREA SHAPE="circle" COORDS="200,320,100" HREF="../PHP/catalogoGeneral.php">
		<AREA SHAPE="circle" COORDS="480,320,100" HREF="../PHP/catalogoGeneral.php">
		</MAP>
		<SPAN>INTRODUCCION <BR><BR></SPAN>
		“<strong>Comida</strong> de nuestro horno a tu paladar en pocos minutos”<BR>
		En InstaFood, solo importa una cosa que TÚ quedes satisfecho. 
		Con más de 10 años de llevando <strong>comida</strong> a hogares en EEUU, venimos a España con
		ganas de seguir creciendo en nuestro mercado de <strong>comida a domicilio</strong>, 
		con o sin cocinar. <a href="formulario.php">¿A qué esperas?</a><BR><BR><BR><BR><BR><BR>
		</P>
		
		<!--LINK  PARA EL REGISTRO -->
		<center>
		<a href="../PHP/formulario.php"><IMG SRC="../Imagenes/Inicio/registro.png" width="20%" height="20%"></a>
		</center>
		
		<!--DENTRO DE ESTE RECUADRO INTRODUCIMOS LOS SERVICIOS OFRECIDOS -->
		<SPAN><BR>SERVICIOS<BR> </SPAN>
		<DIV ID="rec_servicios">
		<BR>
		<P CLASS="servicios" > 
		<a href="catalogoGeneral.php"><IMG  SRC="../Imagenes/Inicio/domicilio.png" ALIGN="right" alt=" Comida a domicilio en INSTAFOOD" onmouseover="this.width=313.2;this.height=273;" onmouseout="this.width=261;this.height=228;"></a>
		
		Con nuestro servicio de <a href="catalogoGeneral.php">comida a domicilio</a>, más rápido en España,
		en cuestión de minutos podrás de disfrutar de la <strong>comida</strong> que desees 
		sin salir de tu hogar, desde una pizza que parce traída de la mismisima
		toscana hasta la hamburguesa más NewYorkina de la gran manzana.
		<BR>
		<a href="catalogoGeneral.php"><IMG SRC="../Imagenes/Inicio/cocina.jpg" ALIGN="left" alt="Comida sin preparar y riquisima en INSTAFOOD " onmouseover="this.width=250;this.height=250;" onmouseout="this.width=220;this.height=220;" width="220" height="220" ></a>
		<BR><BR><BR><BR>
		Si eres de los valientes, dejanos echarte una mano con la <strong>comida</strong>, y verás como este es también tu sitio,
		te ofrecemos los <a href="catalogoGeneral.php">productos más frescos</a> y de mejor calidad en la puerta de tu 
		casa, como los cocines es misión tuya. Buena suerte amigo.
		<BR><BR><BR>
		</P>
		</DIV>
		
		<!--DENTRO DE ESTE RECUADRO INTRODUCIMOS LA INFORMACION DEL EQUIPO INTEGRANTE DE LA EMPRESA -->
		<SPAN><BR>EQUIPO </SPAN>
		<BR>
			<div ID="IzdaGrande">
			<li type="circle"> <P ID="equipo"> <strong>CEOs: Paula Cantoral Gutiérrez y Sergio Valentin Arroyo.</strong><BR>
								Jovenes y entusiastas, una idea que surgio como proyecto para la universidad
								ahora mismo coloca a estos dos chicos en el punto de mira de todas las revistas
								sobre emprendimiento y nuevas empresas. <br></P></li>
					<center>	
					<IMG SRC="../Imagenes/Inicio/ceos.jpg" alt="Organizacion de la empresa, SERGIO y PAULA. Instafood" width="20%" height="20%">
					</center>
					<P ID="equipo"> Una vez ha quedado claro que si se pone esfuerzo y dediación, el éxito está asegurado!</P>
		</div>
 
			<div ID="derecha1">
		
			<li type="circle"> <IMG SRC="../Imagenes/Inicio/argi.jpg" alt="El mejor cocinero del mundo en INSTAFOOD" ALIGN="left" width="13%" height="13%">
								<P ID="equipo"><strong>Equipo de cocina:</strong> <BR> Nada mas y nada menos que este famoso cocinero tanto dentro
							  como fuera de la cocina. El mismo tomo la decision de dejar todo por esta nueva idea, si el 
							  confia en ellos como no lo vas a poder hacer tu.</P></li>
							 
			</div>
		
			<div ID="derecha2">
			<li type="circle"><IMG SRC="../Imagenes/Inicio/transporte.jpg" alt="Transportistas de InstaFood." ALIGN="right" width="25%" height="25%">
								<P ID="equipo"> <strong>Transportistas:</strong><BR> Nuevas motos recien traidas de los EEUU, con este innovador diseño podras devorar la comida que
								se te antoje en cuestion de minutos, no te asustes por los conductores, venian en el pack, son buena gente. ¡Eso
								sí yo que tu dejaria propina!</P></li>
									
								
			</div>
		
		
		
		
		<!--DENTRO DE ESTE RECUADRO INTRODUCIMOS LAS OPINIONES DE NUESTROS CLIENTES  -->
			<SPAN><BR><br><br><BR><BR><BR><BR><BR><BR><br><br>OPINONES DE NUESTROS CLIENTES<BR> </SPAN>
		
		
		<div id="derecha">
		
				<h2>Maria C.</h2>
				<P ID="opiniones"> No hay nada mejor que llegar de trabajar, sentarte en el sofa coger el telefono,<BR> 
		y esperar a que suene el timbre con una deliciosa cena.<BR></P>
		</div>

		<div id="centro">
			
				<h2>Pablo F.</h2>
				<P ID="opiniones"> ¡Me salvó la cita! Quería cocinar algo para mi chica y todos los supermercados<BR> 
		estaban cerrados, menos mal que vía telefónica convirtieron mi lista de la compra en realidad.<P>
		
				
		</div>
		<div id="izda">
				
				<h2>Susana G.</h2>
				<P ID="opiniones">Los viernes con InstaFood ya son una tradición que mejor plan que quedar con unos <BR>
		colegas y disfrutar de una cena mientras disfrutamos de una buena partida cartas.</P>
				
		</div>
	
	<!--AQUI INTRODUCIMOS NUESTRA UBICACION y contacto -->
	<BR><BR>
	<SPAN><BR>CONTACTO Y UBICACION </SPAN>
	
	<div>
		<h2> Paula Cantoral Gutiérrez: 666 852 143<BR>
			Sergio Valentín Arroyo: 654 287 328<BR>
			e-mail: instafood@gmail.com<BR>
			Dirección: Paseo de Belén,15,47011,Valladolid 
			
		</h2>
		
		<div id="demo">
			<h2>MOSTRAR INFORMACIÓN</h2>
			<button type="button" onclick="loadDoc()">Mostrar</button>
		</div>
	
 			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2980.680795260688!2d-4.707513550109807!3d41.662638279138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd47129fa4e6336b%3A0x18d673bb11ddb3d4!2sEdificio+de+Tecnolog%C3%ADas+de+la+Informaci%C3%B3n+y+las+Telecomunicaciones%2C+Universidad+de+Valladolid%2C+8%2C+47002+Valladolid!5e0!3m2!1ses!2ses!4v1476465141283" width="600" height="450" frameborder="0" style="border:0" ALIGN="right" allowfullscreen></iframe>

		<br><br><br>
		<button id="sugerencia" onclick="window.location.href='buzon.php'"><IMG SRC="../Imagenes/Inicio/buzon.png"></BUTTON></button>		
		
	</body><!--FIN DEL CUERPO -->
</html>


<?php

?>




