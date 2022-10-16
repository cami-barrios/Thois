<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	require_once 'conexion.php';

    $cedula = $_POST['cedulacliente'];
    $nombrecliente = $_POST['nombrecliente'];
    $apellidocliente = $_POST['apellidocliente'];

    if(isset($_POST['correocliente}'])){
        $correocliente = $_POST['correocliente'];
    }


	$query = "INSERT INTO clientes(cedula_cliente, nombre_cliente, apellido_cliente, correo_cliente) VALUES ('".$cedula."','".$nombrecliente."','".$apellidocliente."','".$correocliente."')";
	$result = $mysql->query($query);

	if($mysql->affected_rows > 0){
		echo "<p class='inform'>* Registro exitoso</p>";
	}else{
		echo "<p class='error'>* No se pudo registrar</p>";
	}
	
}

?>