<html>
    <head>
        <title>Importe del pedido</title>
    </head>
    <body>
        <h1 align="center">Importe del pedido</h1>
        <?php
            $Nombre = $_GET["nombreusuario"];
            $unidadesA = $_GET["unidades_A"];
            $unidadesB = $_GET["unidades_B"];

            $subtotalA = $unidadesA*10;
            $subtotalB = $unidadesB*12;
            $totalPedido = $subtotalA + $subtotalB;

            echo "Nombre = <b>$Nombre</b>\n <pre>\n";
            echo "Libro A = <b>$unidadesA</b> usd a 10 = <b>$subtotalA</b>\n";
            echo "Libro B = <b>$unidadesB</b> usd a 12 = <b>$subtotalB</b>\n";
            echo "-----------------------------\n";
            echo "<b>Totales</b>                <b>$totalPedido</b></pre>\n";
        ?>
    </body>
</html>