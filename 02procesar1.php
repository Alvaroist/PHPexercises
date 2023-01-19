<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos introducidos</title>
</head>
<body>
    <h1 align="center">Datos introducidos</h1>
        <?php
            $NombreUsuario = $_GET["nombreusuario"];
            $unidadesA = $_GET["unidades_A"];
            $unidadesB = $_GET["unidades_B"];
            echo "Nombre = $NombreUsuario <br>";
            echo "Numero unidades libro A = $unidadesA<br>";
            echo "Numero unidades libro B = $unidadesB<br>";
        ?>
</body>
</html>