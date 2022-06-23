<?php
    //Incluir o arquivo de conexão sempre que ´recisar acessar o SGBD
    include_once 'conecta.php';

    // Consulta em SQL que será executada na base de dados
    $sql = "SELECT * FROM student";

    // Armazena o resultado da consulta
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
    //saida de dados de cada linha da tabela
    while($linha = mysqli_fetch_assoc($resultado)) {
        echo  "<br> id: " . $linha["id"]. "<br>";
        echo "Nome: " . $linha["nome"]. "<br>";
        echo "Curso: " . $linha["curso"]. "<br>";
        echo "idade: " . $linha["idade"]. "<br>";
    }
    }
    else {
        echo "0 resultados";
    }


    //Fechar a conexão
    mysqli_close($conexao);

?>