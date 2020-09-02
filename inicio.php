<?php  
require_once 'Model/Bingo.php';

$objBingo = new Bingo();
$tiposBingo = $objBingo->tiposBingo();
?>

<html>

 <!-- Place your stylesheet here-->
        <link href="style.css" rel="stylesheet" type="text/css">

        <!-- Importar Letras -->
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
        
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
<aside class=" opace main-sidebar">

  <section class="sidebar">
    <form action="control_Inicio.php" method="POST"> 
       <div class="user-panel"  id="mostrarOcultar">
       <header>
       Bienvenido al BINGO
       </header>
       <div class="form-group">
      <label  class="labelSider"><?php echo $objUsuario->id ?></label>
      </div>
      <div class="form-group">
         <label  class="labelSider"><?php echo $objUsuario->usuario ?></label>
      </div>
    </div>
    
    <input type="text" name="nombrePartida" class="campos" placeholder="Nombre de la partida" id="nombrePartida">
    
    <ul class="sidebar-menu" data-widget="tree">
     
    </ul>
    <div class="form-group">
      <label class="labelSider">Ingrese Juego</label>
      <div class="caja">
       <select>
        <option value="0">Formas de Ganar</option>
       <?php while($row = mysqli_fetch_assoc($tiposBingo)) { ?>
        <option value="<?php echo $row['id']?>"> <?php echo $row['nombre']?></option>
      <?php } ?>
      </select>
      </div>
    </div>
    
 <button name="Jugar" class="btn btn-outline-secondary" >Jugar</button>
 <button name="Inicio" class="btn btn-outline-secondary" >Unirse</button>
  
   </form>
  </section>
  <!-- /.sidebar -->
</aside>

        <footer>
            Luz Yovanna Vivas Meza<br>
            Yefry Alejandro Montero Cuetia<br>
            Proyecto en construccion
        </footer>
</html>