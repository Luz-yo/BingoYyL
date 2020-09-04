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
    $idBingo  = $_GET['cboJuegosActivos'];
    //$resultadoBalotas = $objBingo->traerBalotas( $_SESSION['idBingo'] );
    //die( var_dump( $resultadoBalotas ) );
    $cadena = '';
    $n = 1;
    $bingo = ['', 'B', 'I', 'N', 'G', 'O'];
    for ( $f = 1; $f <= 5; $f++ ) {
        $cadena =  $cadena."<TR><TD class='BINGO".$f."'>".$bingo[$f].'</td>';

        for ( $c = 0; $c<15; $c++ ) {
            if ( $_SESSION[$n] == $n ) {
                $cadena = $cadena."<TD id='".$n."' style='background: black' class='balotas'>".$n.'</td>';
            } else {
                $cadena = $cadena."<TD id='".$n."' class='balotas'>".$n.'</td>';

                $n++;
            }

        }
        $cadena = $cadena.'</tr>';

    }
    echo $cadena;
} elseif ( isset( $_GET['pintar'] ) ) {

}

?>