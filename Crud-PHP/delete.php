<?php 

include("conexion.php");
$con = conectar();

$id = $_GET["id"];
//Almacenamos la consulta de nuestra bdd a una variable
$sql = "DELETE FROM alumnos WHERE id ='$id'";
$query = mysqli_query($con, $sql);

if($query) {
    Header("Location: index.php");
}

?>