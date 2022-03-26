<?php

session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'crud_prueba'
);

if(isset($conn)){
  //echo "<h1>DB is Connected</h1>";
} else { 
  //echo "error connection"; 
}

?>