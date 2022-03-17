<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pode ou não dirigir</title>
</head>
<body>
<?php
    $idade1=17;
    $idade2=20;
    $idade3=18;
    $idade4=15;
    $hab1=FALSE;
    $hab2=FALSE;
    $hab3=TRUE;
    $hab4=TRUE;


    if ($idade1>=18 && $hab1==TRUE)   {
        echo "A) O primeiro cliente foi aprovado e pode dirigir";
    }
     else {
        echo "A) O primeiro cliente foi reprovado e  não pode dirigir";
    }

    echo"<br>";
   

    if ($idade2>=18 && $hab2==TRUE)   {
        echo "B) O segundo cliente foi aprovado e pode dirigir";
    }
     else {
        echo "B) O segundo cliente foi reprovado e  não pode dirigir";
    }
    echo"<br>";

    if ($idade3>=18 && $hab3==TRUE)   {
        echo "C) O terceiro cliente foi aprovado e pode dirigir";
    }
     else {
        echo "C) O terceiro cliente foi reprovado e  não pode dirigir";
    }
    echo"<br>";

    if ($idade4>=18 && $hab4==TRUE)   {
        echo "D) O quarto cliente foi aprovado e pode dirigir";
    }
     else {
        echo "D) O quarto cliente foi reprovado e  não pode dirigir";
    }




?>
</body>
</html>