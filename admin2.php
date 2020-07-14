<?php
session_start();
if(isset($_SESSION["ci"])){
    $ci=$_SESSION["ci"];
    include 'conexion.php';
    $sql="select * from identificador where ci='$ci'";
    if($resultado =mysqli_query($conn,$sql)){
    
        $fila = $resultado->fetch_assoc();
            session_start();
            $_SESSION["nombre"]=$ci;
    
    }else{
        echo "error de consulta";
    }

}

?>

<a href="logout.php">Cerrar sesion</a>


