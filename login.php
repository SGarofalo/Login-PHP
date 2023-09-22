<?php

$usuario = $_POST ["usuario"];//traigo un dato de html y lo guardo en una var,
//le pongo el nombre del INPUT

$contrasenia = $_POST ["pass"];

//verificar el valor de la contraseña
$ckusuario = "admin";
$ckpass = 1234;

//hago la validacion
if($usuario == $ckusuario & $contrasenia == $ckpass){
    //echo("Correcto");
        // Redireccionar a la página de YouTube
    header("Location: https://i.pinimg.com/originals/71/31/b2/7131b266591a244ff61c3320dfcda570.jpg");
    exit(); 
}else{
    //echo("Incorrecto");
    header("Location: https://cdn.memegenerator.es/imagenes/memes/full/31/96/31968993.jpg");
    exit(); 
}


?>