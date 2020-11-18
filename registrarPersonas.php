<?php

include("BaseDatos.php");

if(isset($_POST["boton"])){

    $nombre=$_POST["nombreUsuario"];
    $apellido=$_POST["apellidoUsuario"];
    $cedula=$_POST["cedulaUsuario"];
    $descripcion=$_POST["descripcion"];

    //echo($nombre."-".$apellido."-".$cedula."-".$descripcion);


    //crear un objeto de la base de datos.
    $operacionBD= new BaseDatos();
    


    //consulta SQL.
    $consultaSQL="INSERT INTO usuarios(nombre, apellido, cedula, descripcion) VALUES ('$nombre','$apellido','$cedula','$descripcion')";
    

    //llamar al metodo agregar datos de la clase baseDatos.
    $operacionBD->agregarDatos($consultaSQL);

    

}




?>