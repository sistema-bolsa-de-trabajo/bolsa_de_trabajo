<?php

include_once(MODELO . "personas-modelo.php");


$persona = new personas();

$resultado = $persona->getCv();

include_once(VISTA . "principal-vista.php");