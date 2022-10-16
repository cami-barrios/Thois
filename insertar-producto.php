<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	require_once 'conexion.php';

    $ref = $_POST['ref'];
    $nombreprod = $_POST['nombreprod'];
    $cantidad = $_POST['cantidad'];
    $proveedor = $_POST['proveedor'];
    $precio = $_POST['precio'];
    if(isset($_POST['descprod'])){
        $descripcion = $_POST['descprod'];
    }

	$query = "INSERT INTO prueba_producto(ref, nombre, proveedor, cantidad, precio, descripcion) VALUES ('".$ref."','".$nombreprod."','".$proveedor."','".$cantidad."','".$precio."','".$descripcion."')";
	$result = $mysql->query($query);

	if($mysql->affected_rows > 0){
		echo "<p class='inform'>* Registro exitoso</p>";
	}else{
		echo "<p class='error'>* No se pudo registrar</p>";
	}
	
}

?>