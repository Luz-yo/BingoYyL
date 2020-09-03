<?php

require_once 'db.php';
session_start();
class Usuario
{ 

    function validarUsuario($usuario , $password){
    	    $estado = false;
          $query = "SELECT * FROM usuarios 
                    WHERE usuario = '$usuario' and password = '$password'";
          global $conn;
          $result_users = mysqli_query($conn, $query);    
          while($row = mysqli_fetch_assoc($result_users)) {
              if($row['usuario'] == $usuario and $row['password'] == $password){
                $_SESSION["idUsuario"] = $row['id'];
                $_SESSION["usuario"] = $row['usuario'];
                $estado = true;
              }
         }
         return $estado;
    }

}?>