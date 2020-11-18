<?php

include("BaseDatos.php");

if(isset($_POST["boton"])){
    $nombre=$_POST["nombreUsuario"];
    $apellido=$_POST["apellidoUsuario"];
    $cedula=$_POST["cedulaUsuario"];
    $descripcion=$_POST["descripcion"];
    echo($nombre."-".$apellido."-".$cedula."-".$descripcion);
    
}
?>