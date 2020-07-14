<?php
//Se reciben los datos del formulario
$ci=$_POST["ci"];
$clave=$_POST["clave"];
//realizamos la conexion a la bd
include 'conexion.php';
//realizamos la consulta para ver si hay un registro con el ci introducido
$sql="select * from usuario where ci='$ci' and clave='$clave'";

if($resultado =mysqli_query($conn,$sql)){
    //obtenemos el resutado 
    $fila = $resultado->fetch_assoc();
    if ($fila) {
       //guardamos el ci en session
        session_start();
        $_SESSION["ci"]=$ci;
        header("Location: admin.php"); // Redirecionamiento directo
    } else {
        header("Location: login.php");
    }


}else{
    echo "error de consulta";
}


