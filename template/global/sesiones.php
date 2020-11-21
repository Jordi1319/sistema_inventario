<?php

session_start();
if (!isset($_SESSION['usuario'])) {  //si no existe se va a redirigir
    echo"redirigir al login...";
    header('location:index.php');
}{
    print_r($_SESSION['usuario']);
}


?>