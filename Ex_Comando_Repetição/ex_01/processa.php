<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 01 PHP</title>
</head>
<body>
<?php
    $numero = $_POST['num'];
    $cubo = pow($numero,3);

    for($cont=$numero;$cont<=$cubo;$cont++)
    //echo "O cubo do número digitado pelo usuário é de: $cubo"
    echo "Contagem de números no intervalo do valor digitado até o cubo do mesmo são: $cont <br>";
    echo "O número digitado na página anterior foi $numero e o seu cubo é $cubo";

?>
</body>
</html>