<?php

class personas
{
    public function getCv()
    {
        include_once(MODELO . "conexion.php");

        $conexion = new conexion();

        $con = $conexion->getCon();

        $sql = "select * from personas";

        $resultado = mysqli_query($con, $sql);

        return $resultado;
    }
}

?>