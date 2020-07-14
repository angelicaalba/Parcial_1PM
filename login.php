<?php
    include "cabecera.inc.php";
?> 
<div class="login">
    <form action="verifica.php" method="POST">
    <label >Usuario</label>
    <input  type="text" name="ci">
    <br>
    <label>Clave</label>
    <input type="password" name="clave">
    <br>
    <input type="submit" name="aceptar" value="Aceptar">
    <input type="submit" name="cancelar" value="Cancelar">
    </form>
</div>

<?php
    include "pie.inc.php";
?>