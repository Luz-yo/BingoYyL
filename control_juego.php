<?php
session_start();

require_once 'Model/Bingo.php';
$objBingo = new Bingo();

if ( isset( $_POST['balotas'] ) ) {
    $balota = $_POST['balotas'];

    $id = $_SESSION['idBingo'];
    $objBingo->guardarBalotasGeneradas( $id, $balota );
    echo 'Balota sacada '.$balota.' Bingo '.$id;
} 

switch ($_GET['pintar']) {
    case 1:
        # code...
        $resultadoBalotas = $objBingo->traerBalotas($_SESSION['idBingo']);
       $cadena = '';
       while ($ver = mysqli_fetch_row($resultadoBalotas)) {
           $cadena= $cadena.$ver[0].',';
       }
       echo $cadena;
         break;

        case 2:
        # code...
          $resultadoBalotas = $objBingo->traerBalota($_SESSION['idBingo']);
          $ver = mysqli_fetch_row($resultadoBalotas); 
          echo  $ver[0];
          //echo $cadena;
        break;

}

?>