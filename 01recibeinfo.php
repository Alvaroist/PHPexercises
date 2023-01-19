<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recibeinfo</title>
</head>
<body>
    <?php
        //recibo
        $nombre_usuario = $_POST["nombre"];
        $edad_usuario = $_POST["edad"];

        //valido datos
        echo "Hola ".$nombre_usuario." tu edad es ".$edad_usuario;
        //toma de decisión según la edad
        if ($edad_usuario >=18){
    ?>
            <div style="color:blue;">
            <b>
            <?php
                echo "Hola $nombre_usuario, como tu edad es $edad_usuario puedes ver el contenido!";
            ?>
                </b></div>
            <?php
        }
        else {
            //parte negativa
            echo '<span style="color: red;">';
            echo "Lo siento $nombre_usuario, no puedes ver esta página. Adios!";
            echo "<span>";
        }
        ?>
</body>
</html>