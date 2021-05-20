<?php

    $servername = '172.18.0.10'; //Padrão - Server Local
    $database = 'book_store'; //Alterar conformew o nome do banco de dados
    $username = 'root'; //Padrão - root
    $password = 'mysql'; // Senha do banco de dados

    // Criando a conexão
    $conexao = mysqli_connect($servername, $username, $password, $database);
