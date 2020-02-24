<?php
include("db.php");
if (isset($_POST['save'])){
   // echo "guardando";
    $placa=$_POST['placa'];
    $marca=$_POST['marca'];
    $color=$_POST['color'];
    $id_tipos=$_POST['id_tipos'];
    $descripcion=$_POST['descripcion'];
    // echo $placa;
    // echo $marca;
    // echo $color;
    // echo $tipo;
    // echo $descripcion;
    $query = "INSERT INTO vehiculos(placa, marca, color, id_tipos, descripcion) VALUES ('$placa', '$marca', '$color','$id_tipos', '$descripcion')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed.");
    }
    header("location: index.php");    
    //echo "save";
}
?>