<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicío 04</title>
</head>
<body>
    <?php
        $numero= $_POST['num'];
        $resultado=1;
        for($cont=$numero;$cont>=1;$cont--){
            $resultado *= $cont;
            echo "$cont <br>";
            echo "$resultado <br>";
        }

        echo "O resultado final é de: $resultado";
    
    ?>
</body>
</html>