<!-- Incluimos la conexion de php para poder trabajar con ella y mostrar los resultados en pantalla -->
<?php

include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM alumnos";
$query = mysqli_query($con, $sql);

// Convertimos el resultado de la consulta en un Array, para poder mapear
// $array = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CRUD Estudiantes</title>


</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <form action="insert.php" method="POST">
                    <input type="text" name="id" placeholder="ID" class="form-control mb-3 bg-dark text-light">
                    <input type="text" name="namep" placeholder="Name" class="form-control mb-3 bg-dark text-light">
                    <input type="text" name="lastName" placeholder="Last Name" class="form-control mb-3 bg-dark text-light">
                    <input type="text" name="secondLastName" placeholder="Second Last name" class="form-control mb-3 bg-dark text-light">
                    <input type="text" name="datet" placeholder="Birthday (YY/MM/DD)" class="form-control mb-3 bg-dark text-light">

                    <input type="submit" class="btn btn-success btn-block">
                </form>
            </div>
            
            <div class="col-md-9">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Second Last Name</th>
                            <th scope="col">Birthday</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                <tbody>
                   <!-- Aqui adjuntamos los valores desde la BDD -->
                   <?php 
                        while($array = mysqli_fetch_array($query)) {
                   ?>
                   <!-- Se imprimen los valores que nos devolvio BDD en array -->
                   <tr>
                       <td><?php echo $array['id'] ?></td>
                       <td><?php echo $array['namep'] ?></td>
                       <td><?php echo $array['lastName'] ?></td>
                       <td><?php echo $array['secondLastName'] ?></td>
                       <td><?php echo $array['datet'] ?></td>
                       <td> <a href="update.php?id=<?php echo $array['id'] ?>" class="btn btn-info">Update</a> </td>
                       <td> <a href="delete.php?id=<?php echo $array['id'] ?>" class="btn btn-danger">Delete</a> </td>

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