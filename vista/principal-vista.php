<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once(VISTA . "head.php") ?>
</head>
<body>
    <?php 

        echo '<br>este es el contenido de la pagina y se puede usar las variables del controlador';
        while ($lista = mysqli_fetch_array($resultado)) {
            echo "<br>" . $lista['cv_per'] . "<br><br>";
        }
    ?>

        <a href="?view=otra-pag">ir a otra pagina</a>

        <br><br>

<?php include_once(VISTA . "footer.php") ?>
</body>
</html>