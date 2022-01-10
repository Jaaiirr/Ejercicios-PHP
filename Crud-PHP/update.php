<?php
    include("conexion.php");
    $con = conectar();

    // obtenemos el valor id de la url
    $id = $_GET['id'];

    //Aplicamos la consulta que nos devolvera el ID
    $sql = "SELECT * FROM alumnos WHERE id = '$id'";
    //Ejecutamos la consulta a nuestra bdd pasando como parametros la conexion y la consulta sql
    $query = mysqli_query($con, $sql);

    //Lo convertimos en un array para poder mapear
    $array = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Update</title>
</head>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="col-md-4">
        <form action="getUpdate.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $array['id'] ?>">

            <input type="text" name="namep" class="form-control mb-3 bg-dark text-light" value="<?php echo $array['namep'] ?>">
            <input type="text" name="lastName"class="form-control mb-3 bg-dark text-light" value="<?php echo $array['lastName'] ?>">
            <input type="text" name="secondLastName" class="form-control mb-3 bg-dark text-light" value=" <?php echo $array['secondLastName'] ?>">
            <input type="text" name="datet" class="form-control mb-3 bg-dark text-light" value=" <?php echo $array['datet'] ?>">

            <input type="submit" class="btn btn-success btn-block" value="Update">
        </form>
        </div>
        
    </div>
</body>
</html>