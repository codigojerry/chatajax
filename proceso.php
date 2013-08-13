<?php

include 'conexion.php';
$con=conexion();

$sql="INSERT INTO mensajes (usuario, contenido) VALUES ('".$_POST['usuario']."','".$_POST['cont']."')";

if (!mysqli_query($con,$sql)){
  die('Error: ' . mysqli_error($con));
 }

//respuesta 
$result = mysqli_query($con,"SELECT * FROM mensajes");
while($row = mysqli_fetch_array($result))
  {
  echo "<b>".$row['usuario']."</b>: ".$row['contenido'];
  echo "<hr>";
  } 
 
mysqli_close($con);
?> 