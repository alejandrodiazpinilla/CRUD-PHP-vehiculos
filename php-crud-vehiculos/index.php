<?php include("db.php");?>
<?php include("include/header.php");?>
<!-- tabla para visualizar vehivulos -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <table class="table table-bordered" >
                <thead>
                    <tr>
                        <th>Placa</th>
                        <th>Marca</th>
                        <th>Color</th>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Acciónes</th>                        
                    </tr>
                </thead>
                <tbody>
                <?php
                  // comexion para tablas de base de datos
                  $query = "SELECT * FROM vehiculos INNER JOIN tipos_vehiculos ON vehiculos.id_tipos=tipos_vehiculos.id_tipos";
                  $result_tasks = mysqli_query($conn, $query); 
                  while($row = mysqli_fetch_array($result_tasks)) { ?>
                    <tr>
                    <td><?php echo $row['placa']; ?></td>
                    <td><?php echo $row['marca']; ?></td>
                    <td><?php echo $row['color']; ?></td>
                    <td><?php echo $row['tipos']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td>
                      <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-success">
                      <i class="fas fa-edit"></i>
                      </a>
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                      </a>
                    </td>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("include/footer.php")?>