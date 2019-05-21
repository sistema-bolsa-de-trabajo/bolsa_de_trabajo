<?php

include_once(MODELO . "conexion.php");

$conexion = new conexion();

$con = $conexion->getCon();

$sql = "select * from personas";

$resultado = mysqli_query($con, $sql);

include_once(VISTA . "principal-vista.php");