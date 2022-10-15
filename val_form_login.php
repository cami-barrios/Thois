<?php
if(isset($_POST['submit'])){

    $errores = array();

    if(empty($correo)){
        $errores[] = "<p class='error'>* Agrege un correo</p>";
    }else{
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores[] = "<p class='error'>* Direccion de correo invalida</p>";
        }
    }

    if(empty($contrasena)){
        $errores[] = "<p class='error'>* Agrege la Contrase&ntildea</p>";
    }

    for($i = 0;$i < count($errores); $i++){
        echo $errores[$i];
        echo "<br>";
    }

    if(!empty($correo) && !empty($contrasena) && count($errores)==0){
        include("vld_login.php");
    }

}

?>
