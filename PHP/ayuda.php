<!--P�gina de ayuda de la tienda de alimentaci�n-->
<!--Comienzo de la pagina -->

<html>
	<!--Comienzo de la cabecera -->
	<head>
	<!--Titulo de la p�gina -->
	<title>INSTAFOOD| AYUDA</title>
	
	<!--Funci�n para obtener la hora -->
	<script language="JavaScript">
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
	
	</head> <!--Fin de la cabecera -->
	<!--Inicio del cuerpo, que carga automaticamente la hora -->
	<body onload=obtenerHora()>
		<!--Mostramos el reloj -->
		<form name="reloj" align="right">
			<input id="reloj" name="hora" size="8"></form>
	
	
			<!--DENTRO DE ESTE RECUADRO INTRODUCIMOS EL LOGO DE NUESTRA PAGINA -->
	<?php include 'cabecera.php'; ?>
		
		</center>
		
		<!--Aqu� creamos toda la informacion relacionada con la ayuda -->
	<H1> <br><br><br>�TIENES ALGUN PROBLEMA? �NO EST�S SEGURO DE C�MO COMPRAR EN NUESTRA P�GINA? </H1>
		<center><H2><br> <IMG SRC="../Imagenes/Ayuda/emoticono.png" width="3%" height="3%">  Tranquil@ estamos para ayudarte. <IMG SRC="../Imagenes/Ayuda/emoticono.png" width="3%" height="3%"> </H2> </center>
		<audio src="../audio/intro.m4a" preload="auto" autoplay></audio> <!--Manejo de audio, en este caso automatico -->
		
			<h2> Nuestra p�gina: </h2>
					<audio src="../audio/estructura.m4a" preload="auto" controls></audio> <!--Manejo de audio, en este caso con controles -->

			<p> Como puedes ver en la parte superior de la pantalla tenemos la barra de los men�s. <br></p>
			
				<center><IMG src="../Imagenes/Ayuda/menu.png " width="70%" height="70%"></center>
				
				<p><br>En primer lugar vemos la pesta�a de inico que nos lleva a la pagina principal. <br>
				<br>Despues tenemos la secci�n del catalogo a comida, que si pasamos el raton por encima encontraremos
				un desplegable con las subcategorias que ofrecemos. <br> </p>
				<center><IMG src="../Imagenes/Ayuda/desplegable.png"></center>
				
				<p>En tercer lugar tenemos la comida a domicilio, donde de la misma manera que en el catalogo de alimentos
				si pasamos el cursor por encima veremos opciones m�s concretas de la seccion. <br><br>
				A continuacion, la secci�n de registro donde completando nuestro formulario te convertiras en socio de nuestra plataforma.<br><br>
				Por ultimo esta la secci�n de ayuda, donde nos encontramos ahora mismo. </p>


			<h2> �Como registrarse? </h2>
			<audio src="../audio/locoPorComprar.m4a" preload="auto" controls></audio>
			<p> Solo tienes que pinchar en la 4� opcion del menu, donde pone "registro", te redigiremos a una nueva pagina donde completando tus datos
			seras dado de alta y tendras la oportunidad de comprar lo que desees. 
			
					<center><IMG src="../Imagenes/Ayuda/formularioReg.png"  width="60%" height="60%"></center>
			
			
			</p>
			
			<h2> �Como comprar? </h2>
			<audio src="../audio/comprar.m4a" preload="auto" controls></audio>
			<p> Tanto si deseas algun alimento sin cocinar o alguna comida cocinada a domicilio, simplemente tienes que ir a la secci�n deseada en los men�s
			seleccionar la cantidad que deseas y darle al icono del carrito, de este modo aparecer� una venatana emergente, con un resumen de nuestra elecci�n.</p>
			
				<IMG src="../Imagenes/Ayuda/compra.png" ALIGN="left">
				<IMG src="../Imagenes/Ayuda/confirmacion.png" ALIGN="right"><br>
				<IMG src="../Imagenes/Ayuda/tramitarPedido.png" ALIGN="right">
				
			<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
			<h2> PROMOCION SOCIOS VIP </h2>
			<audio src="../audio/vip.m4a" preload="auto" controls></audio>
			<p> Si eres usuario de nuestra p�gina VIP, tendras un descuento del 10% en todos los articulos. </p>
			
			<center><IMG src="../Imagenes/Ayuda/descuento.jpg"  width="40%" height="40%"></center>
			
			<h2>CUANTO LLEVO GASTADO O CUANTO ES EL 90% DE MI PRECIO </h2>
			<p> Ofrecemos a nuestros clientes una sencilla calculadora para su uso, si se pulsa la tecla socio y el boton resultado, veras el precio para socios 
			VIP. </p>

			
	</body><!--Fin del cuerpo -->
</html><!--Fin -->



