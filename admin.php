
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

 <!-- NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a href="#" class="navbar-brand">
      <img src="fotos/<?php echo $foto  ?>" width="45" alt="" class="d-inline-block align-middle mr-2">
      <span class=""><?php echo "".$nombre  ?></span>
    </a>

    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="./admin.php" class="nav-link">Bienvenidos  <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a href="seccion.html" class="nav-link">al </a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Sistema </a></li>
      </ul>
    </div>
  </div>
</nav>
<!--  -->

<?php  
$fondo="";
switch($color){
  case 'azul':
    $fondo = 'blue';
  break;
  case 'negro':
    $fondo = 'black';
  break;
  case 'verde':
    $fondo = 'green';
  break;
}

$color 
 ?>

<!--  -->
<div class="container-fluid" style="background-color: <?php echo $fondo?>;">

<section class="py-5">
  <div class="container py-5">
    <div class="col-md-6">
        <form action="cambiarcolor.php" method="POST">
            <select name="color" class="form-control  border-0 shadow-sm px-4">
              <option value="">Selecione color</option> 
                <option value="azul">Azul</option> 
                <option value="negro">Negro</option>
                <option value="verde">Verde</option>

            </select>
            <br>
            <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Cambiar color</button>
        </form>
    </div>
  </div>
</section>

</div>



<!-- fin de contenido -->
<?php
    include "pie.inc.php";
?>