<?php
session_start();  
// vaciarla  
$_SESSION = array();  
// destruirla  
session_destroy();
header("location: inicio.php");
?>