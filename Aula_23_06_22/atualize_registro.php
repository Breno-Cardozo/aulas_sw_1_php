<?php
    //Incluir o arquivo de conexão sempre que precisar acessar o SGBD
    include_once 'conecta.php';

    //SQL para atualizar um registro
    $sql = "UPDATE student SET curso='Culinária' WHERE id=2";

    if(mysqli_query($conexao, $sql)) {
        echo "Registro atualizado com sucesso";
    }
    else{
        echo "Erro na atualização: " . mysqli_error($conexao);
    }

    //Fechar conexão
    mysqli_close($conexao);


?>