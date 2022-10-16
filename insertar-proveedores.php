<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	require_once 'conexion.php';

    if(isset($_POST['submit'])){

        $ref = $_POST['refprov'];
        $nombre = $_POST['nombreprov'];
        $celular1 = $_POST['celprov1'];
        $ciudprov = $_POST['ciudprov'];
    
        if(isset($_POST['celprov2'])){
          $celular2 = $_POST['celprov2'];
      }
    
      if(isset($_POST['correoprov'])){
        $correoprov = $_POST['correoprov'];
    }
    
    if(isset($_POST['direcprov'])){
      $direcprov = $_POST['direcprov'];
    }

    }

	$query = "INSERT INTO proveedores(refprov, nombreprov, celprov1, celprov2, correoprov, direcprov, ciudprov) VALUES ('".$ref."','".$nombre."','".$celular1."','".$celular2."','".$correoprov."','".$direcprov."','".$ciudprov."')";
	$result = $mysql->query($query);

	if($mysql->affected_rows > 0){
		echo "<p class='inform'>* Registro exitoso</p>";
	}else{
		echo "<p class='error'>* No se pudo registrar</p>";
	}
	
}

?>