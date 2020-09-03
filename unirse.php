<?php  
require_once 'Model/Bingo.php';

$objBingo = new Bingo();
$juegosActivos = $objBingo->listarJuegosActivos();
?>

<aside class=" opace main-sidebar">


  <section class="sidebar">
    <form action="control_Inicio.php" method="POST"> 
    <div class="user-panel"  id="mostrarOcultar">
       <label class="labelSider">Bienvenido al BINGO</label>
       <div class="form-group">
      <label  class="labelSider"></label>
      </div>
      <div class="form-group">
         <label  class="labelSider"></label>
      </div>
    </div>
     
    <ul class="sidebar-menu" data-widget="tree">
     
    </ul>
     <div class="form-group">
      <label class="labelSider">Ingrese Juego</label>
      <select>
        <option value="0">Juegos Activos</option>
       <?php while($row = mysqli_fetch_assoc($juegosActivos)) { ?>
        <option value="<?php echo $row['id']?>"> <?php
        $juegos = $row['bingo'].' | '.$row['estado'].' | '.$row['usuario'].' | '.$row['tipo'];
         echo $juegos?></option>
      <?php } ?>
      </select>
    </div>
    
    <div class="form-group">
   <button name="Jugar">Jugar</button>
    </div>
     </form>
  </section>
  <!-- /.sidebar -->
</aside>