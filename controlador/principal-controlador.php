<?php

include_once(MODELO . "conexion.php");

$conexion = new conexion();

$con = $conexion->getCon();

$sql = "select * from personas";

$resultado = mysqli_query($con, $sql);

while ($lista = mysqli_fetch_array($resultado)) {
    echo $lista['nombre_per'];
}