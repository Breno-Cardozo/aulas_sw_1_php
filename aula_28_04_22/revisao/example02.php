<?php
    $estado="SP";

    switch($estado){
        case "SP":
           echo "A sigla de estado inselida foi SP, ou seja São Paulo";
            break;
        case "RJ":
            echo "A sigla de estado inserida foi RJ, ou seja Rio de Janeiro";
            break;
        default:
            echo "Sigla não encontrada";
    }
?>