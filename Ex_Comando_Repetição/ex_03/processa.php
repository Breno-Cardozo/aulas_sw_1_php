<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicío 03</title>
</head>
<body>
    <?php
        $numero = $_POST['num'];

        echo "Fique com o cálculo do número inserido em uma tabuada e 1 a 10:<br>";

        for ($cont=0;$cont<=10;$cont++){
            $multiplica = $cont * $numero;
            echo "$cont X $numero = $multiplica <br>";

        }

    ?>
    
</body>
</html>