<?php
if(isset($_POST['submit'])){
    if(empty($correo)){
        echo "<p class='error'>* Agrege un correo</p>";
    }else{
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            echo "<p class='error'>* Direccion de correo invalida</p>";
        }
    }

    if(empty($contrasena)){
        echo "<p class='error'>* Agrege la contrasena</p>";
    }

    if(!empty($correo) && !empty($contrasena)){
        include("vld_login.php");
    }

}

?>