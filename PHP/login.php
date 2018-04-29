<?php require_once("conecBD.php"); ?>
<?php include("cabecera.php"); ?>
 <?php
 
if(isset($_SESSION["usuario"])){
// echo "Session is set"; // for testing purposes
header("Location: inicio.php");
}
 
if(isset($_POST["usuario"])){
 
if(!empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
 $usuario=$_POST['usuario'];
 $contrasenia=$_POST['contrasenia'];
 
$query =mysql_query("SELECT * FROM usuarios WHERE usuario='".$usuario."' AND contrasenia='".$contrasenia."'");
 
$numrows=mysql_num_rows($query);
 if($numrows!=0)
 
{
 while($row=mysql_fetch_assoc($query))
 {

 $_SESSION['session_usuario']=$usuario;
  $_SESSION['session_contrasenia']=$contrasenia;
 $_SESSION['session_privilegio']=$row['privilegio'];

 
/* Redirect browser */
 header("Location: inicio.php");
 }
 } else {
 
$message = "Nombre de usuario ó contraseña invalida!";
 }
 
} else {
 $message = "Todos los campos son requeridos!";
}
}
?>
 
 <div class="container mlogin">
 <div id="login">
 <h1><br><br>Logueo</h1>
<form name="loginform" id="loginform" action="" method="POST">
 <p>
 <label for="user_login">Nombre De Usuario<br />
 <input type="text" name="usuario" id="usuario" class="input" value="" size="20" /></label>
 </p>
 <p>
 <label for="user_pass">Contraseña<br />
 <input type="password" name="contrasenia" id="contrasenia" class="input" value="" size="20" /></label>
 </p>
 <p class="submit">
 <input type="submit" name="login" class="button" value="Entrar" />
 </p>
 <p class="regtext">No estas registrado? <a href="formulario.php" >Registrate Aquí</a>!</p>
</form>
 
</div>
 
</div>

