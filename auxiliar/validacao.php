<?php
    if (isset($_GET['desconectar'])) {
        desconectarUser();
        echo "<script>alert('Usuário deslogado')</script>";
        echo "<meta http-equiv='refresh' content='0; url=/loja-web/partes/index.php'/>";
    }
    include 'conexao.php';
    function validarLogin($email, $senha){
        $sessaoAtiva = verificarSessao();
        if (!$sessaoAtiva) {
            $usuario = findUser($email, $senha);
        if ($usuario != null) {
            setcookie('username',$usuario['nome_usuario'],time() + 86400, '/');
            echo "<script>alert('Login bem sucedido')</script>";
            return true;
        }else{
            echo "<script>alert('Falha no login')</script>";
            return false;
        }
        }else {
            echo "<script>alert('Existe uma sessão ativa')</script>"; 
            echo "<meta http-equiv='refresh' content='0; url=/loja-web/partes/index.php'/>";
        }
        
    }

    function cadastrarUsuario($nome_usuario, $email, $senha){
        $sessaoAtiva = verificarSessao();
        echo "<script>alert($sessaoAtiva)</script>";
        if (!$sessaoAtiva) {
            $cadastrado = createUser($nome_usuario, $email, $senha);
            if ($cadastrado) {
                echo "<script>alert('Cadastro bem sucedido')</script>";
            }else{
                echo "<script>alert('Falha no cadastro')</script>";
            }
            return $cadastrado;
        }else{
            echo "<script>alert('Existe uma sessão ativa')</script>"; 
            echo "<meta http-equiv='refresh' content='0; url=/loja-web/partes/index.php'/>";
        }
    }

    function verificarSessao(){
        if(isset($_COOKIE['username'])){
            return true;
        }else{
            return false;
        }
    }

    function desconectarUser(){
        setcookie('username','',time() - 100, '/');
    }

?>