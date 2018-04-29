<?php 
	session_start();
	include('conecBD.php');
	
	@ $cantidad = $_POST['cantidad'];
	@ $id_producto = $_POST['id_producto'];
	
	if(!isset($cantidad)){
		$cantidad=1;
	} //Si no introducimos cantidad la fijamos a 1.
	$consulta="select * from productos where id_producto=".$id_producto;
	$query=mysql_query($consulta);
	$row=mysql_fetch_array($query);
	
	if(isset($_SESSION['carro']))
		$carro=$_SESSION['carro'];

	$carro[md5($id_producto)]=array('cantidad'=>$cantidad,'nombre'=>$row['nombre'],	'precio'=>$row['precio'],'id_producto'=>$id_producto);
		
	$_SESSION['carro']=$carro;
		
	header("Location: javascript://history.go(-1)"); 

	
?>

	