<?php

session_unset(); 
session_destroy(); 
require_once 'Model/Usuario.php';
$objUsuario = new Usuario();

if($_POST['login']){
    if($objUsuario->validarUsuario($_POST['usuario'],$_POST['contrasena']))
    {
       header("location:inicio.php"); 
   }else {
            header("location:index.html");
        }
    }
?>