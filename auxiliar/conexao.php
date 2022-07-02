<?php

/*
Função usada para criar a conexão com o banco de dados. Dessa forma facilita a manutenção no caso de uma
troca nos parâmetros de login no banco.
*/

function createConn(){
    $host = "localhost";
    $db_name = "loja_web";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password, $db_name);

    return $conn;
}

//Retorna todos os dados de uma tabela selecionada pelo usuário
function getAll($table_name){
    
    $conn = createConn();

    $sql_query = "SELECT * FROM $table_name";
    $result = mysqli_query($conn, $sql_query);

    $dataReceived = mysqli_fetch_all($result);
    return $dataReceived;
}



?>