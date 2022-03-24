<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PROCESSA DADOS</title>
</head>
<body>
    <?php

    $period= $_POST['period'];

    switch ($period) {
        case "M":
            echo "Muito obrigado por participar da nossa pesquisa, já armazenamos a sua resposta e você estuda no período da manhã!!!!";
            break;
        case "T":
            echo "Muito obrigado por participar da nossa pesquisa, já armazenamos a sua resposta e você estuda no período da tarde!!!!";
            break;
        case "N":
            echo "Muito obrigado por participar da nossa pesquisa, já armazenamos a sua resposta e você estuda no período da noite!!!!";
            break;
        default:
            echo "A letra inserida por você não corresponde a nenhum dos turnos, por favor tente novamente!";
            break;
    }


?>
    
</body>
</html>