<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	require_once 'conexion.php';

	$correo=$_POST['email'];
	$cont=$_POST['pass'];

	$query = "SELECT * FROM usuarios WHERE email='".$correo."' and contrasena='".$cont."'";
	$result = $mysql->query($query);
	
	if($mysql->affected_rows > 0){
		header("Location: index.php");
	}else{
		echo "Usuario no existe";
	}
	$result->close();
	$mysql->close();
}

?>
