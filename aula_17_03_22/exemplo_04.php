<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exemplo 04</title>
</head>
<body>
<?php
    $sigla= "SP";
    switch ($sigla) {
        case "SP":
            echo "Você escolheu São Paulo";
            break;
        case "RJ":
            echo "Você escolheu Rio de Janeiro";
            break;
        case "MG":
            echo "Você escolheu Minas Gerais";
            break;
        default:
            echo "Não encontrei a sigla em minha base de dados!!!!!!";
            break;

    }
?>
</body>
</html>