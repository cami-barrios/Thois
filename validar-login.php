<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	require_once 'conexion.php';

	$correo=$_POST['correo'];
	$cont=$_POST['contrasena'];

	$query = "SELECT * FROM usuarios WHERE correo='".$correo."' and contrasena='".$cont."'";
	$result = $mysql->query($query);
	
	if($mysql->affected_rows > 0){
		header("Location: index.php");
	}else{
		echo "<p class='error'>* Usuario no existe</p>";
	}
	$result->close();
	$mysql->close();
}

?>
