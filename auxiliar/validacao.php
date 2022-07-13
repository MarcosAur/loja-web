<?php
    if (isset($_GET['desconectar'])) {
        $sessaoAtiva = verificarSessao();
        if($sessaoAtiva){
            desconectarUser();
            echo "<script>alert('Usuário deslogado')</script>";
            echo "<meta http-equiv='refresh' content='0; url=/loja-web/partes/index.php'/>";
        }else {
            echo "<script>alert('Não existe uma sessão ativa')</script>";
            echo "<meta http-equiv='refresh' content='0; url=/loja-web/partes/index.php'/>";
        }
        
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

    function salvarBanner($nome, $arquivo){
        $extensao = explode('.',$arquivo['name']);

            
        $extensao = $extensao[count($extensao) - 1];
        //Validação do tipo de arquivo.
        if ($extensao == "jpg" or $extensao == "png") {
            $nome_do_arquivo = $nome . "." . $extensao;
            $path = "../img/banners/$nome_do_arquivo";
            $movido = move_uploaded_file($arquivo['tmp_name'],$path);


            if ($movido) {
                echo "<script>alert('Banner cadastrado')</script>";    
            }else {
                echo "<script>alert('Banner não cadastrado')</script>";
            }
            
        }else {
            echo "<script>alert('Extensão não permitida. Permitidas: .png, .jpg')</script>";
        }
    }
?>