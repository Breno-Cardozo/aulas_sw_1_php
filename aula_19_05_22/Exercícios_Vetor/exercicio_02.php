<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 2</title>
</head>
<body>
    <?php
    for($i=0; $i<5; $i++){
        $x[$i]= rand(1,10);
        echo "<br> $x[$i]";
    }
    ?>
</body>
</html>