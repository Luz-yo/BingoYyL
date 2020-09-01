<?php

require_once 'db.php';


class Bingo
{
	function inicarBingo()
	{
	   $sql = "INSERT INTO Bingo (estado) VALUES ('Proceso')";
	   global $conn;
       if (mysqli_query($conn, $sql)) {
         echo "";
        }
	}

	function tiposBingo(){
		$sql = "SELECT * FROM tipos_bingo ORDER BY nombre desc";
	    global $conn;
		return  mysqli_query($conn, $sql);
	}

}?>