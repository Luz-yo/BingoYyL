<?php  
require_once 'Model/Bingo.php';

$objBingo = new Bingo();
$tiposBingo = $objBingo->tiposBingo();
?>

<aside class=" opace main-sidebar">

  <section class="sidebar">
    <form action="control_Inicio.php" method="POST"> 
       <div class="user-panel"  id="mostrarOcultar">
       <label class="labelSider">Bienvenido al BINGO</label>
       <div class="form-group">
      <label  class="labelSider"><?php echo $objUsuario->id ?></label>
      </div>
      <div class="form-group">
         <label  class="labelSider"><?php echo $objUsuario->usuario ?></label>
      </div>
    </div>
     
    <ul class="sidebar-menu" data-widget="tree">
     
    </ul>
    <div class="form-group">
      <label class="labelSider">Ingrese Juego</label>
      <select>
        <option value="0">Formas de Ganar</option>
       <?php while($row = mysqli_fetch_assoc($tiposBingo)) { ?>
        <option value="<?php echo $row['id']?>"> <?php echo $row['nombre']?></option>
      <?php } ?>
      </select>
    </div>
    
 <button name="Jugar">Jugar</button>
 <button name="Inicio">Unirse</button>
   </form>
  </section>
  <!-- /.sidebar -->
</aside>