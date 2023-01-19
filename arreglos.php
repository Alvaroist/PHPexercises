<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
</head>
<body>
    <?php
        $moneda=array("espana"=>"peseta", "Francia"=>"franco", "USA"=>"dollar");

        $pais=array(
            "espana"=> array(
                "Nombre"=>"Espana",
                "lengua"=>"Castellano",
                "moneda"=>"peseta"
            ),
            "francia"=> array(
                "Nombre"=>"Francia",
                "lengua"=>"Frances",
                "moneda"=>"Franco"
                )
            );
        echo $pais["espana"]["moneda"];

        $valor = count($moneda);
        echo $valor;

        foreach ($moneda as $country){
            echo "$country<br>";
        }

        $entrada = array("Miguel", "Pepe", "Julio", "Pablo");

        //modifico el tamano

        $salida = array_slice($entrada,0,2);

        foreach ($salida as $actual){
            echo $actual."<br>";
        }

        $estadios_futbol=array("Barcelona"=>"Nou Camp", "Real Madrid"=>"Santiago Bernabeu", "Valencia"=>"Mestalla", "Real Sociedad"=>"Anoeta");
        foreach($estadios_futbol as $indice=>$actual){
            echo $indice."--".$actual."<br>";
        }

        $array=array(1,2,40,55 );
        $cadena = "la posición tres contiene el dato $array[2]";
        echo $cadena;
    ?>
</body>
</html>