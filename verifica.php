<?php
$ci=$_POST["ci"];
$clave=$_POST["clave"];

include 'conexion.php';

$sql="select * from usuario where ci='$ci' and clave='$clave'";
if($resultado =mysqli_query($conn,$sql)){
    
    $fila = $resultado->fetch_assoc();
    if ($fila) {
        echo "SI consulta";
        session_start();
        $_SESSION["ci"]=$ci;
        header("Location: admin2.php"); // Redirecionamiento directo
    } else {
        header("Location: login.php");
    }


}else{
    echo "error de consulta";
}


