<?php
session_start();

require_once 'Model/Bingo.php';
$objBingo = new Bingo();

if ( isset( $_POST['balotas'] ) ) {
    $balota = $_POST['balotas'];

    $id = $_SESSION['idBingo'];
    $objBingo->guardarBalotasGeneradas( $id, $balota );
    echo 'Balota sacada '.$balota.' Bingo '.$id;
} elseif ( isset( $_GET['juegoUsuario'] ) ) {
    $resultadoBalotas = $objBingo->traerBalotas($_SESSION['idBingo']);
    $cadena = '';
    while ($ver = mysqli_fetch_row($resultadoBalotas)) {
        $cadena= $cadena.$ver[0].',';
    }
    echo $cadena;
} elseif ( isset( $_GET['pintar'] ) ) {
       $resultadoBalotas = $objBingo->traerBalotas($_SESSION['idBingo']);
    $cadena = '';
    while ($ver = mysqli_fetch_row($resultadoBalotas)) {
        $cadena= $cadena.$ver[0].',';
    }
    echo $cadena;
}

?>