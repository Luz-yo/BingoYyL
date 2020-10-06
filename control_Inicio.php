
 <?php

    session_start();
    require_once 'Model/Bingo.php';
    $objBingo = new Bingo();

    if ( isset( $_POST['Jugar'] ) )  {
        $idTipo = $_POST['cboTipo'];
        $nombre = $_POST['nombrePartida'];
        $_SESSION['idTipo'] = $idTipo;
        $id = $objBingo->iniciarBingo( $nombre, $idTipo, $_SESSION['idUsuario'] );
        $_SESSION['idBingo'] = $id;

        header( "location: bingo.html?idJuego=$id" );

    } else if ( isset( $_POST['unirse'] ) ) {

        $id = $_POST['cboJuegosActivos'];
        
        $_SESSION['idBingo'] = $id;
        $idTipo  =  $objBingo->conectarJugador( $id, $_SESSION['idUsuario'] );
        
        $_SESSION['idTipo'] = $idTipo->idTipo;
        header( "location:multijugador_bingo.html?idJuego=$id" );
    } else {
        header( 'location:inicio.php' );
    }
    
?>