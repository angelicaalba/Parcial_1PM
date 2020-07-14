
<?php

session_start();
// verificamos si exista la session de ci
if(isset($_SESSION["ci"])){
    // obtenemos de session el ci
    $ci=$_SESSION["ci"];
    // con a bd
    include 'conexion.php';

    $sql="select * from identificador where ci='$ci'";
    if($resultado =mysqli_query($conn,$sql)){
    // obtenemos el resultado
        $fila = $resultado->fetch_assoc();
      
        // guardando la consulta sql en variables
        $ci=$fila['ci'];
        $nombre=$fila['nombre'];
        $color=$fila['color'];
        $foto=$fila['foto'];
    
    }else{
        echo "error de consulta";
    }

}
   
include "cabecera.inc.php";

?> 
<!-- contenido -->

<header>

<div class="logo" >
        <?php echo "Hola ".$nombre  ?>
<h1 class="color" > aca haras tu encabezffado o header</h1>

</div>
<nav >
            <a href="inicio.html">Inicio</a>
		<a href="unaseccion.html">Una Sección</a>
		<a href="otraseccion.html">Otra Sección</a>
 
  </nav >

 </header>

 <form action="cambiarcolor.php" method="POST">
 <select name="color">
  <option value="azul">Azul</option> 
  <option value="negro">Negro</option>
  <option value="verde">Verde</option>

</select>
<button type="submit" >Cambiar color</button>
 </form>

<img class="foto" src="fotos/<?php echo $foto  ?>" alt="">
<a href="logout.php">Cerrar sesion</a>


<!-- fin de contenido -->
<?php
    include "pie.inc.php";



?>