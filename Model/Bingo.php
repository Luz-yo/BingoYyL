
<?php

require_once 'db.php';


class Bingo
{
	function iniciarBingo()
	{
	   $sql = "INSERT INTO `bingo` (`nombre`, `estado`) VALUES ('Prueba Juego', 'Proceso')";
	   global $conn;
	   $result_bingo = mysqli_query($conn, $sql); 
         if(!$result_bingo) {
         die("Query Failed.");
         }

         $sql ="SELECT MAX(id) AS id FROM bingo";
         $rs = mysqli_query($conn,$sql);
         if ($row = mysqli_fetch_assoc($rs)) {
         $id = trim($row['id']);
         }
         return $id;
	}

	function tiposBingo(){
		$sql = "SELECT * FROM tipos_bingo ORDER BY nombre desc";
	    global $conn;
		return  mysqli_query($conn, $sql);
	}


     function listarJuegosActivos(){
     	$sql = "SELECT * FROM bingo where estado = 'Proceso'";
	    global $conn;
		return  mysqli_query($conn, $sql);
     }
}?>