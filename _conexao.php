<?php

    $servername = "localhost"; //Padrão - Server Local
    $database = "book_store"; //Alterar conformew o nome do banco de dados
    $username = "bookstore_admin"; //Padrão - root
    $password = "bookstore2020_123"; // Senha do banco de dados

    // Criando a conexão
    $conexao = mysqli_connect($servername, $username, $password, $database);

?>