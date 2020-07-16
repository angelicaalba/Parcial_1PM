<?php

//Se reciben los datos del formulario
$color=$_POST["color"];
include 'conexion.php';
session_start();
$ci=$ci=$_SESSION["ci"];
$sql="update identificador set color='$color' where ci='$ci'";
if(mysqli_query($conn,$sql)){
  header("Location: admin.php"); 
}
else{
  echo "error";
}



    
