<?php

function conectar() {
    $host = "localhost";
    $user = "root";
    $password = "";

    $database = "crud-estudiantes";

    $conection = mysqli_connect($host, $user, $password);
    mysqli_select_db($conection, $database);

    return $conection;
}

?>