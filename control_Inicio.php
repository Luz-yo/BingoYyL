<?php

require_once 'Model/Bingo.php';

$objBingo = new Bingo();
if(isset($_POST['Jugar'])) {

$id = $objBingo->iniciarBingo();

            header("location: bingo.html?idJuego=$id");
        } else{
            header("location:unirse.php");
        }
?>