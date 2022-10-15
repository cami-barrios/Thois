<?php 

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

$errores = array();

    if(empty($ref)){
        $errores[] =  "<p class='error'>*Referencia esta vacio</p>";
    }

    if (empty($nombre)) {
        $errores[] = "<p class='error'>*El nombre esta vacio</p>";
    }else if(is_numeric($nombre)){
        $errores[] = "<p class='error'>*En el nombre debe ser texto</p>";
    }

    if(empty($celular1)){
        $errores[] = "<p class='error'>*El celular 1 esta vacio</p>";
    }else if(!is_numeric($celular1)){
        $errores[] = "<p class='error'>*El celular debe ser numerica</p>";
    }

    if(empty($ciudprov)){
        $errores[] = "<p class='error'>*La ciudad esta vacio</p>";
    }else if(is_numeric($ciudprov)){
        $errores[] = "<p class='error'>*La ciudad debe ser texto</p>";
    }

        if(!empty($correoprov)){
            if(!filter_var($correoprov, FILTER_VALIDATE_EMAIL)){
                $errores[] = "<p class='error'>*La direccion de correo es invalida</p>";
            }
        } 

        if(!empty($celular2)){
            if(!is_numeric($celular2)){
                $errores[] = "<p class='error'>*El celular 2 debe ser numerico</p>";
            }
        } 

        for($i = 0;$i < count($errores); $i++){
            echo $errores[$i];
        }

    if(!empty($ref) and !empty($nombre) and !empty($celular1) and !empty($ciudprov) && count($errores)==0){
        include("insert-prov.php");
    }

}

?>