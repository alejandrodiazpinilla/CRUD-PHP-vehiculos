<?php 
    include("db.php");
    if(isset($_GET['id'])) {
      $id = $_GET['id'];
      $query = "DELETE FROM vehiculos WHERE id = $id";
      $result = mysqli_query($conn, $query);
      if(!$result) {
        die("Query Failed.");
      }
        header('Location: index.php');
    }
?>