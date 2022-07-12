<?php
include_once '../auxiliar/validacao.php';
if(isset($_POST['email']) and isset($_POST['senha']) and isset($_POST['username'])){
  $cadastrado = cadastrarUsuario($_POST['username'], $_POST['email'], $_POST['senha']);
  if ($cadastrado) {
    echo "<meta http-equiv='refresh' content='0; url=/loja-web/partes/tela-login.php'/>";
  }else {
    unset($_POST['email']);
    unset($_POST['senha']);
    unset($_POST['username']);
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Tela de Cadastro</title>
</head>
<body class="bg-secondary">
    <div class="jumbotron text-white mt-3 mb-3">
      <h1 class="display-4" style="text-align: center;">Olá, seja bem vindo!</h1>
      <p class="lead" style="text-align: center;">Faça seu cadastro para conseguir se conectar e ter acesso aos nossos produtos</p>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-4 login-position">
            <form method='POST'>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label text-white">Nome Completo</label>
                  <input type="text" name='username' class="form-control" id="exampleInputPassword1" placeholder="Digite seu nome">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-white">Email</label>
                  <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu endereço de e-mail">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label text-white">Senha</label>
                  <input type="password" name='senha' class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
                </div>
                <button type="submit" class="btn btn-warning">Cadastrar</button>
            </form>
          </div>
        </div>
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</footer>
</html>