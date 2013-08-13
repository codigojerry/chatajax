<?php

function conexion(){

$con=mysqli_connect("localhost","root","jerson","chatajax");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  return $con;

}
?> 