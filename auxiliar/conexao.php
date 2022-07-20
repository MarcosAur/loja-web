<?php

/*
Função usada para criar a conexão com o banco de dados. Dessa forma facilita a manutenção no caso de uma
troca nos parâmetros de login no banco.
*/

function createConn(){
    $host = "localhost";
    $db_name = "loja_web";
    $username = "teste";
    $password = "1234";

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

//Retorna um usuário baseado em um login e uma senha informadas
function findUser($email, $senha){
    $conn = createConn();
    $sql_query = "SELECT * 
                  FROM cliente
                  WHERE email = '$email' AND senha = '$senha'";

    $result = mysqli_query($conn, $sql_query);
    $rows = mysqli_fetch_assoc($result);
    return $rows;
}

//Cadastra um usuário no banco de dados
function createUser($nome_usuario, $email, $senha){
    $conn = createConn();
    $sql_query = "INSERT INTO cliente (nome_usuario, email, senha)
                  VALUES
                  ('$nome_usuario', '$email', '$senha');";
    $result = mysqli_real_query($conn, $sql_query);

    return $result;
}

//Cadastra um banner no banco com os dados repassados no formulário pelo usuário
function cadastrarBanner($nome, $link, $nova_janela, $sequencia, $path, $data_inicio, $data_fim){
    $conn = createConn();
    $sql_query = "INSERT INTO banner (nome, link_destino, nova_janela, sequencia, caminho_para_imagem, data_inicio, data_final)
                  VALUES
                  ('$nome', '$link', '$nova_janela', '$sequencia', '$path', '$data_inicio', '$data_fim');";
    $result = mysqli_real_query($conn, $sql_query);

    return $result;
}

//Busca um banner por id no banco e retorna um array associativo com os dados do banner caso exista
function findBanner($id){
    $conn = createConn();
    $sql_query = "SELECT * 
                  FROM banner
                  WHERE id = '$id';";

    $result = mysqli_query($conn, $sql_query);
    $data = mysqli_fetch_assoc($result);

    return $data;
}

function deletarBanner($id){
    $conn = createConn();
    $sql_query = "DELETE FROM banner WHERE id = '$id';" ;

    $result = mysqli_real_query($conn, $sql_query);

    return $result;
}

function updateBanner($id, $nome, $link, $nova_janela, $sequencia, $path, $data_inicio, $data_fim){
    $conn = createConn();
    $sql_query = "UPDATE banner SET nome = '$nome', link_destino = '$link', nova_janela = '$nova_janela',
                  caminho_para_imagem = '$path', sequencia = '$sequencia', data_inicio = '$data_inicio',
                  data_final = '$data_fim'
                  WHERE id = $id; ";
    $result = mysqli_real_query($conn, $sql_query);

    return $result;
}
?>