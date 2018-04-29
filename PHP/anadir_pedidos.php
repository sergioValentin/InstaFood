<?php
include('cabecera.php');
?>

<html>
	<head>
	</head>
	<body>
		<?php
			//Fichero para introducir los pedidos
			@$id_usuario= $_POST['id_usuario'];
			@$metodo = $_POST['metodo'];
			@$coste_total = $_POST['coste_total'];
			@$fecha = $_POST['fecha'];
					
			$id_usuario= trim($id_usuario);
			$metodo = trim($metodo);
			$coste_total = trim($coste_total);
			$fecha = trim($fecha);

			
			if(!$metodo){
				echo "No ha introducido todos los datos, por favor vuelva a la pagina anterior";
				exit();
			}
			
			$id_usuario = addslashes($id_usuario);
			$metodo = addslashes($metodo);
			$coste_total = addslashes($coste_total);
			$fecha = addslashes($fecha);
			
			
			include('conecBD.php');
			
			@$query = "INSERT INTO pedidos VALUES(null,'".$id_usuario."','".$metodo."','".$coste_total."','".$fecha."')";
			
			$resultado = mysql_query($query);
			
			@$query1 = "SELECT id_pedido FROM pedidos WHERE id_usuario=" . $id_usuario." AND fecha='". $fecha."'";

			$resultado1 = mysql_query($query1);
			
			$row1 = mysql_fetch_array($resultado1);
			
			 $id_pedido=$row1['id_pedido'];
			 
			
			$carro=$_SESSION['carro'];
			
			$instapuntos = round($coste_total);
			@$query3 = "UPDATE usuarios SET instapuntos='$instapuntos' where id_usuario='$id_usuario'";

			$resultado3 = mysql_query($query3);
			
			foreach($carro as $prod => $cant){
					
				@$query2 = "INSERT INTO pedido_productos VALUES(".$id_pedido.",".$cant['id_producto'].",".$cant['cantidad'].")";
				$resultado2 = mysql_query($query2);	
				if($resultado2){
					echo "<script type='text/javascript'>alert('Pedido registrado correctamente al introducir pedido_producto'); location.href='inicio.php';</script>";
				}				
				else if($resultado2 ==0){
					echo "<script type='text/javascript'>alert('El producto no se ha podido registrar correctamenteen pedido_producto. Vuelva a intentarlo');location.href='formulario_compra.php';</script>";
				}
					
			}
			
			if($resultado3){
				echo "<script type='text/javascript'>alert('Puntos asociados correctamente');</script>";
			}
			else if ($reseultado3 ==0 ) {
				echo "<script type='text/javascript'>alert('Los puntos no se han podido registrar correctamente. Vuelva a intentarlo');</script>";
			}
			else if($resultado){
				echo "<script type='text/javascript'>alert('Pedido registrado correctamente'); location.href='inicio.php';</script>";
			}
			else {
				echo "<script type='text/javascript'>alert('El producto no se ha podido registrar correctamente. Vuelva a intentarlo');location.href='formulario_compra.php';</script>";
			}
		?>
	</body>
</html>