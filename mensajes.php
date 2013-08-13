<?php

include 'conexion.php';
$con=conexion();
  
$result = mysqli_query($con,"SELECT * FROM mensajes");

while($row = mysqli_fetch_array($result))
  {
  echo "<b>".$row['usuario']."</b>: ".$row['contenido'];
  echo "<hr>";
  }

mysqli_close($con);


?>