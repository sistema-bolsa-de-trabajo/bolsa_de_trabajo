<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bolsa_de_trabajo/config.php");


if (isset($_GET['view'])) {
    include_once 'controlador/' . $_GET['view'] . '-controlador.php';
} else {
    include_once 'controlador/principal-controlador.php';
}