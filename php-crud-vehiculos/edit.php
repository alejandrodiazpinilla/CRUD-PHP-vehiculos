<?php
include("db.php");
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM vehiculos WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $placa = $row['placa'];
    $marca = $row['marca'];
    $color = $row['color'];
    $id_tipos = $row['id_tipos'];
    $descripcion = $row['descripcion'];
  }
}
// Actualizar
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $placa= $_POST['placa'];
    $marca= $_POST['marca'];
    $color= $_POST['color'];
    $id_tipos= $_POST['id_tipos'];
    $descripcion = $_POST['descripcion'];  
    $query = "UPDATE vehiculos set placa = '$placa', marca = '$marca' , color = '$color', id_tipos = '$id_tipos', descripcion = '$descripcion' WHERE id=$id";
    mysqli_query($conn, $query);    
    header('Location: index.php');
  }
?>
<?php include("include/header.php")?>
<div class="container p-8">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
            <H2>Editar un vehívulo</H2>
                <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                    <input type="text" name="placa" class="form-control" value="<?php echo $placa; ?>" placeholder="Placa" >
                    </div>
                    <div class="form-group">
                        <select name="marca" class="form-control">
                        <option selected>Marca</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Mercedes">Mercedes</option>
                        <option value="BMW">BMW</option>
                        <option value="Honda">Honda</option>
                        <option value="Ford">Ford</option>                        
                        </select>
                    </div>
                    <div class="form-group">
                    <input type="text" name="color" class="form-control" placeholder="Color Del Vehículo" value="<?php echo $color; ?>">
                    </div>   
                    <div class="form-group">
                        <select name="id_tipos" class="form-control">
                        <option selected>Tipo De Vehículo</option>
                        <option value="1">Camioneta</option>
                        <option value="2">Copé</option>
                        <option value="3">Sedán</option>
                        <option value="4">Deportivo</option>                                              
                        </select>
                    </div>                 
                    <div class="form-group">
                    <textarea name="descripcion" value="<?php echo $descripcion; ?>" rows="2" class="form-control" ><?php echo $descripcion; ?></textarea>
                    </div>
                    <input type="submit" name="update" class="btn btn-primary btn-block" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php")?>