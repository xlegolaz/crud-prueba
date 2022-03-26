<?php

include('db.php');

if(isset($_POST['save_task'])){
  $title = $_POST['title'];
  $desc = $_POST['description'];

  $query = "INSERT INTO task(title, des) VALUES ('$title', '$desc')";
  $resul = mysqli_query($conn, $query);

  if(!$resul){
    die("Query Fail");
  }

  $_SESSION['message'] = 'Task saved successfully';
  $_SESSION['message_type'] = 'success';  

  header('Location: index.php');
}
?>