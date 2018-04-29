<?php
	include('cabecera.php');
	
	if(isset($_SESSION['carro']))
	$carro=$_SESSION['carro'];
	
	$id_producto=$_POST['id_producto'];
	
	unset($carro[md5($id_producto)]);
	
	$_SESSION['carro']=$carro;

	header("Location: carrito.php?".SID);
?>