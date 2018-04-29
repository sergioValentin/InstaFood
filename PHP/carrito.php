<?php 
	
	include("cabecera.php");
	if(isset($_SESSION['carro']))
	$carro=$_SESSION['carro'];else $carro=false;



?>
<br><br>
<center>
<h1>CESTA DE LA COMPRA</h1>
</center>
<?php 
	if($carro){
?>
	<table width="720" border="0" cellspacing="10" cellpadding="10" align="center">
	<tr > 
	<td >Producto</td>
	<td >Precio</td>
	<td >Cantidad de Unidades</td>
	<td >Actualizar</td>
	<td>Borrar</td>
	
	</tr>
<?php
//Inicializamos cantariables.

	$precioTotal=0;

	foreach($carro as $prod => $cant){

		$subto=$cant['cantidad']*$cant['precio'];
		$precioTotal=$precioTotal+$subto;


?>
	
<?php

		echo'<tr>';
		echo '<td>';
		echo $cant['nombre'];
		echo '</td>';
		echo '<td>';
		echo $cant['precio'];
		echo '</td>';
		
		echo '<form method="post" action="anadir_carrito.php">';
		echo '<td>';
		echo '<input name="cantidad" type="number" id="cantidad" value="'.$cant['cantidad'].'">';
		echo '</td>';
		echo '<input name="id_producto" type="hidden" value="'.$cant['id_producto'].'" >';
		echo '<td>';
		echo '<button name="actualizar" TYPE="submit" ><IMG src="../Imagenes/actualizar.png" style="width:25%; height:10%"></button>'; 
		echo '</form>';
		echo '</td>';
		
		
		echo '<form method="post" action="borrar_carrito.php">';	
		echo '<td>';
		echo '<input name="id_producto" type="hidden" value="'.$cant['id_producto'].'" >';
		echo '<td>';
		echo '<button name="borrar" TYPE="submit"><IMG src="../Imagenes/borrar.png" style="width:25%; height:10%"></button>'; 
		echo '</form>';
		echo '<tr>';

?>
<?php
 
	}
?>


	</table>
	<center>
	Total de Artículos: <?php echo count($carro);
	
?>
</center>
	<Br>
	<center>
	Total: <?php echo number_format($precioTotal,2);
	
?>$</center>
	<br>
	
	<?php
	
	if(!isset($_SESSION['session_usuario']))
	{
		
		echo "Inicia sesión para tramitar pedido";
		
	}
	else{
		echo "<FORM align='center' method='POST' action='formulario_compra.php'>";
	
		echo "<INPUT TYPE='hidden' NAME='coste_total' VALUE='".$precioTotal."'><br>";
		echo "<INPUT TYPE='hidden' NAME='usuario' VALUE='".$_SESSION['session_usuario']."'><br>";
		echo "<INPUT TYPE='hidden' NAME='contrasenia' VALUE='".$_SESSION['session_contrasenia']."'><br>";		
		echo "<center>Continuar añadiendo productos:";
		echo '<a href="catalogoGeneral.php>">';
		echo '<img src="../Imagenes/Logo/carrito.png" width="50" height="50"></a> 
		</center>
		
		<br>';
		
		echo "<button TYPE='submit' ><IMG SRC='../Imagenes/pagar.png' style='width:40%; height:20%' ></button>";

	}
	?>

<?php }

	else{ 
?>
	<center><p>¡Tu cesta está vacia! A compraaaar!</p>
	<a href="catalogoGeneral.php">
	<img src="../Imagenes/actualizar.png" width="50" height="50"></a>
	</center>
<?php }?>
	</p>
	</body>
</html>