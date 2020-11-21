<?php 

echo "index en modulos";

if (isset($_POST['btnLogin'])) {  //Cuando se presione el boton

    include("global/conexion.php");  //Se conecta a la base de datos

    $txtUsuario = ($_POST['txtUsuario']);   //se recepciona la informacion del formulario
    $txtPassword = ($_POST['txtPassword']);

    //Se hace una busqueda
    $sentenciaSQL=$pdo->prepare("SELECT * FROM tabausuarios WHERE usuario=:usuario AND password=:password");

    $sentenciaSQL->bindParam("usuario",$txtUsuario,PDO::PARAM_STR);
    $sentenciaSQL->bindParam("password",$txtPassword,PDO::PARAM_STR);
    $sentenciaSQL->execute();

    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
    //print_r($registro);
    

    $numeroRegistros=$sentenciaSQL->rowCount();
    
    if ($numeroRegistros>=1) {
        session_start();
        $_SESSION['usuario']=$registro;

        echo"Bienvenido";
        header('location:Verpanel.php');
    }else {
        echo"No se ha encontrado el registro";
    }
    //echo "<br/>valide el correo y contraseña";
}
?>