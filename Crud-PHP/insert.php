<?php

include("conexion.php");
$con = conectar();

//Recibimos los datos de nuestro formulario
$id = $_POST['id'];
$namep = $_POST['namep'];
$lastName = $_POST['lastName'];
$secondLastName = $_POST['secondLastName'];
$datet = $_POST['datet'];


// Creamos el query para insertar valores en la BDD
$sql = "INSERT INTO alumnos VALUES ('$id', '$namep', '$lastName', '$secondLastName', '$datet')";
// La funcion mysqli_query recibe dos parametros, la conexion y la consulta
$query = mysqli_query($con, $sql);

// Si la variable $query existe, entonces nos redigira al archivo index.php
if ($query) {
    Header("Location: index.php");
}

?>