<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>PROCESSA DADOS</title>
</head>
<body>
    <?php

    $name =$_POST['name'];
    $nota1 =$_POST['nota1'];
    $nota2 =$_POST['nota2'];
    $nota3 =$_POST['nota3'];

    $soma = $nota1+$nota2+$nota3;

    $media = $soma / 3;


    echo "<h1>Olá $name, a média final de suas notas é $media</h1>"

?>
    
</body>
</html>

