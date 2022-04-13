<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM conductor";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> CONDUCTOR</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="Agregar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="dni_conductor" placeholder="DNI">
                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos">
                    <input type="text" class="form-control mb-3" name="Edad" placeholder="Edad">
                    <input type="text" class="form-control mb-3" name="Modelo_auto" placeholder="Modelo">

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Edad</th>
                            <th>Modelo_auto</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                        <tr>
                            <th><?php  echo $row['dni_conductor']?></th>
                            <th><?php  echo $row['Nombre']?></th>
                            <th><?php  echo $row['Apellidos']?></th>
                            <th><?php  echo $row['Edad']?></th>
                            <th><?php  echo $row['Modelo_auto']?></th>
                            <th><a href="actualizar.php?id=<?php echo $row['dni_conductor'] ?>"
                                    class="btn btn-info">Editar</a></th>
                            <th><a href="Eliminar.php?id=<?php echo $row['dni_conductor'] ?>"
                                    class="btn btn-danger">Eliminar</a></th>
                        </tr>
                        <?php 
                                            }
                                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>