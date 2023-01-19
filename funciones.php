<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function escribe_separa($cadena){
            for ($i=0; $i<=strlen($cadena); $i++){
                echo $cadena[$i];
                if($i < strlen($cadena)-1)
                    echo "-";
            }
        }

        escribe_separa("hola");
        echo "<p>";
        escribe_separa("Texto mas largo, a ver lo que pasa");

        //función crear tablero de ajedrez

        function hacer_linea($number){
            $flag=1;
            for($counter2=1; $counter2<=8; ++$counter2)
            {
                if($flag==1){
                    echo "■";
                    $flag=0;
                }else{
                    echo "a";
                    $flag=1;
                }
                if($counter2 == 8 && $flag==1){
                    echo "<br>";
                    $flag=0;
                }else{
                    if($counter2==8 && $flag==0){
                        echo "<br>";
                        $flag=1;
                    }
                }
            }

        }
        
       $number=8;
       for ($i=1; $i<=$number; ++$i){
            hacer_linea($number);
       }
       


    ?>
</body>
</html>