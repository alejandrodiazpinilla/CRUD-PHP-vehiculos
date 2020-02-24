<?php include("db.php")?>
<?php include("include/header.php")?>
<div class="container p-8">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
            <H2>Crear un vehívulo</H2>
                <form action="save.php" method="POST">
                    <div class="form-group">
                    <input type="text" name="placa" class="form-control" placeholder="Placa" >
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
                    <input type="text" name="color" class="form-control" placeholder="Color Del Vehículo" >
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
                    <textarea name="descripcion" rows="2" class="form-control" placeholder="Description Del Vehículo"></textarea>
                    </div>
                    <input type="submit" name="save" class="btn btn-primary btn-block" value="Guardar">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php")?>