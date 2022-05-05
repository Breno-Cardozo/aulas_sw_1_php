<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicío 02</title>
</head>
<body>
    <?php
        $numero = $_POST['num'];
        $cubo= pow($numero,3);

       // $abacaxi= 10;
        //$resto= ($abacaxi % 2);
        //echo $resto;

        for ($cont=$numero;$cont<=$cubo;$cont++){
            if ($cont % 2 == 1){
                echo "A contagem de números impares nesse intervalo até o cubo é de: $cont <br>";
            }
        }
        echo "O número inserido na página anterior foi $numero e seu cubo é $cubo ";
    ?>
</body>
</html>