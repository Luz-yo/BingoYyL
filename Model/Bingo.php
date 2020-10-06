
<?php

require_once 'db.php';
session_start();

class Bingo
{
	function iniciarBingo($nombrePartida,$idTipo,$idUsuario)
	{
	   $sql = "INSERT INTO `bingo` (`nombre`, `estado`, `idUsuario`, `idTipo`) 
             VALUES ('$nombrePartida', 'Proceso', $idUsuario, $idTipo)";
	   global $conn;
	   $result_bingo = mysqli_query($conn, $sql); 
         if(!$result_bingo) 
         {
         die("Query Failed.");
         }

         $sql ="SELECT MAX(id) AS id FROM bingo";
         $rs = mysqli_query($conn,$sql);
         if ($row = mysqli_fetch_assoc($rs)) {
         $id = trim($row['id']);
         }

         $this->cargarBalotas($id);

         return $id;
	}

	function tiposBingo(){
		$sql = "SELECT * FROM tipos_bingo ORDER BY nombre desc";
	    global $conn;
		return  mysqli_query($conn, $sql);
	}


     function listarJuegosActivos($idUsuario){
     	$sql = "SELECT DISTINCT bingo.id, bingo.estado, bingo.nombre as bingo, usuario, tipos_bingo.nombre as tipo FROM `bingo`,`usuarios`,`tipos_bingo` WHERE bingo.estado = 'Proceso' and bingo.idUsuario = usuarios.id AND bingo.idTipo = tipos_bingo.id and bingo.idUsuario != $idUsuario";
	    global $conn;
		return  mysqli_query($conn, $sql);
     }

     function guardarBalotasGeneradas($id,$balota){
      //'2020-09-06 00:02:49'
        $hoy = getdate();
  $update_at = $hoy["year"]."-".$hoy["mon"]."-".$hoy["mday"]." ".$hoy["hours"].":".$hoy["minutes"].":".$hoy["seconds"];
     	$sql = "UPDATE `balotas_bingo` SET `estado` = '1', `update_at` = '$update_at' WHERE `balotas_bingo`.`idBingo` = $id and `balotas_bingo`.`idBalota` = $balota ";
     	global $conn;
	    $result_balotas_bingo = mysqli_query($conn, $sql); 
           if(!$result_balotas_bingo) 
           {
           die("Query Failed.");
           }
     }

     function traerBalotas($idBingo){
        $sql = "SELECT idBalota FROM `balotas_bingo` WHERE idBingo = $idBingo and estado = 1";
        global $conn;
        $result_balotas = mysqli_query($conn, $sql);
          if(!$result_balotas) 
          {
          die("Query Failed.");
          }
        return $result_balotas;
       }    

        function traerBalota($idBingo){
        $sql = "SELECT idBalota FROM `balotas_bingo` WHERE idBingo = $idBingo and estado = 1  ORDER by update_at DESC LIMIT 1";
        global $conn;
        $result_balotas = mysqli_query($conn, $sql);
          if(!$result_balotas) 
          {
          die("Query Failed.");
          }
        return $result_balotas;
       }   

     function conectarJugador($idBingo, $idUsuario){
       $sql = "INSERT INTO `jugadores_bingo` (`idBingo`, `idUsuario`) 
             VALUES ( $idBingo,$idUsuario)";
        global $conn;
        $result_bingo = mysqli_query($conn, $sql); 
         if(!$result_bingo) 
         {
         die("Query Failed.");
         }
        
     }

     function cargarBalotas($id){
     	for($i = 1; $i<=75; $i++){
         $sql = "INSERT INTO `balotas_bingo` (`idBingo`, `idBalota`) VALUES ( $id, $i)";
	     global $conn;
	     $result_balotas_bingo = mysqli_query($conn, $sql); 
           if(!$result_balotas_bingo) 
           {
           die("Query Failed.");
           }
         }
     }

     function cargarGanador($idBingo, $idUsuario){
            $sql = "INSERT INTO `Ganadores_bingo` (`idBingo`, `idUsuario`) VALUES ( $idBingo, $idUsuario)";
       global $conn;
       $result_balotas_bingo = mysqli_query($conn, $sql); 
           if(!$result_balotas_bingo) 
           {
           die("Query Failed.");
           }
         }
}?>