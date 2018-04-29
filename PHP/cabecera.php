<?php
	session_start();
	date_default_timezone_set('Europe/Madrid');
?>
 


<!--	<meta charset="utf-8" />
	<!--Metainformacion de la pagina, autor, contacto, organizacion, y descripcion del sitio-->
	<meta name="author" content="Paula Cantoral & Sergio Valentin" />
	<meta name="contact" content ="instafood@tel.uva.es" />
	<meta name="organization" content ="Universidad de Valladolid" />
	<meta name="description" content="Instafood, el lugar donde encontraras la comida a domicilio de la mayor calidad y 
				al mejor precio. Tanto comida preparada como productos frescos
				Con solo una llamada en cuestion de minutos sabra lo que es disfrutar de la comida" />
		
		<!--Aquí introducimos las hojas de estilo utilizadas (estilo_menu.css y estilo_texto.css), así como el favicon de la página -->
	<LINK REL="stylesheet" HREF="../Hojas_Estilo/estilo_menu.css" TYPE="text/css">
	<LINK REL="stylesheet" HREF="../Hojas_Estilo/estilo_compra.css" TYPE="text/css">
	<LINK REL="stylesheet" HREF="../Hojas_Estilo/estilo_reloj.css" TYPE="text/css">
	<LINK REL="stylesheet" HREF="../Hojas_Estilo/estilo_formulario.css" TYPE="text/css">
	<LINK REL="stylesheet" HREF="../Hojas_Estilo/estilo_inicio.css" TYPE="text/css">
	<LINK REL="stylesheet" HREF="../Hojas_Estilo/estilo_texto.css" TYPE="text/css">
	<LINK REL="stylesheet" HREF="../Hojas_Estilo/estilo_ayuda.css" TYPE="text/css">
	<link rel="icon" href="../Imagenes/Logo/icon.png" type="image/x-icon">

	
			<STYLE TYPE="text/css"> 
			</STYLE>
			
		<!--DENTRO DE ESTE RECUADRO INTRODUCIMOS EL LOGO DE NUESTRA PAGINA -->
		<center>
		<a href="../PHP/inicio.php"><IMG SRC="../Imagenes/Logo/LogoFino2.png" width="70%" height="40%" ></a>
		</center>
		
		<!-- SECCION DE MENUS Y RESPECTIVOS DESPLEGABLES -->
		<div id="header">
		<ul class="menu">
			<li><a href="inicio.php">Inicio</a></li>
			<li><a href="catalogoGeneral.php">Catalogo</a>
				<ul>
					<li><a href="comida_fresca.php">Comida fresca</a></li>
					<li><a href="comida_domicilio.php">Comida a domicilio</a></li>
	
				</ul>
			</li>
			<li><a href="formulario.php">Registro</a></li>
			<li><a href="ayuda.php">AYUDA </a></li>
			
			<li> <a href="login.php"> ACCEDE A TU CUENTA </a>
					<ul>
							<?php
							
							if(!isset($_SESSION['session_usuario']))
							{
								
								echo '<li id="fondo">Si ya estas registrado <a href="login.php"> accede a tu cuenta </a> mediante nombre de usuario y contraseña, <br>
								si aún no te ha registrado, <a href="formulario.php">HAZLO YA!</a></li>';
								
							
							}
							
							else
							{
								

								if($_SESSION['session_privilegio'] == 2)
								{
																		
									echo "<li><H1> ZONA CLIENTES:  <BR> </li>";
									echo "<li><a href='buscador.php'> BUSCADOR DE PRODUCTOS </a>  <BR></li>";
									echo "<li><a href='carrito.php'> TU carrito </a>  <BR> </li>";
									
								}
								else if($_SESSION['session_privilegio'] == 1)
								{
									
									echo "<li>ZONA ADMINISTRADOR</li>";
									echo "<li><a href='gestion_tienda.php'> Gestion de la tienda </a>  <BR></li>";
									echo "<li><a href='gestion_clientes.php'> Gestion de clientes </a>  <BR></li>";
																

								}
								
							}
							?>
							
					</ul>
			</li>
			<li><a href="logout.php">CERRAR SESION </a></li>
			
		</div>
		
		
		
		
		<br><br><br><br>