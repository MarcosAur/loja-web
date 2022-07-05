<?php
    include 'conexao.php';
    function validarLogin($email, $senha){
        $usuario = findUser($email, $senha);
        if ($usuario != null) {
            setcookie('username',$usuario['nome_usuario'],time() + 86400, '/');
            echo "<script>alert('Login bem sucedido')</script>";
            return true;
        }else{
            echo "<script>alert('Falha no login')</script>";
            return false;
        }
    }

    function cadastrarUsuario($nome_usuario, $email, $senha){
        $cadastrado = createUser($nome_usuario, $email, $senha);
        if ($cadastrado) {
            echo "<script>alert('Cadastro bem sucedido')</script>";
        }else{
            echo "<script>alert('Falha no cadastro')</script>";
        }
        return $cadastrado;
    }

?>