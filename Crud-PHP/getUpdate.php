<?php 
    include("conexion.php");
    $con = conectar();

    $id = $_POST['id'];
    $namep = $_POST['namep'];
    $lastname = $_POST['lastName'];
    $secondLastName = $_POST['secondLastName'];
    $datet = $_POST['datet'];

    //almacenamos la consulta en una variable
    $sql = "UPDATE alumnos SET nameP = '$namep', lastName = '$lastname', secondLastName = '$secondLastName', datet = '$datet' WHERE id = $id";
    //Aplicamos la consulta a nuestra bdd
    $query = mysqli_query($con, $sql);

    //Validamos si la consulta $query existe para redirigir a nuestro index

    if($query) {
        Header("Location: index.php");
    }


?>