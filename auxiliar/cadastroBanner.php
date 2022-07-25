<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Cadastrar Banner</title>
</head>
<body>
    <?php
    include "./validacao.php";
    include_once "../utilitarios/mostrarMensagem.php";
    include_once "../utilitarios/redirecionar.php";
        if(isset($_POST['enviado'])){
            $arquivo = $_FILES['arquivo'];
            $path = salvarBanner(str_replace("/","",$arquivo['tmp_name']), $arquivo);

            if(gettype($path) == "boolean"){ //Erro caso o a imagem não subir no upload
                alert("Erro ao cadastrar banner no servidor.");
                mudarDePagina("../partes/visualizarBanners.php");
                die();
            }


            if($_POST['data_fim'] > getdate()){
                alert("Caiu nesse if fml");
                die();
            }


            if ($_POST['data_inicio'] >= $_POST['data_fim']) {
                alert("Data de inicio maior que a data de fim");
                mudarDePagina("../partes/visualizarBanners.php");
                die();
            }
            $banner_cadastrado = cadastrarBanner($_POST['nome'],$_POST['link'], $_POST['nova_janela'], $_POST['sequencia'], $path, $_POST['data_inicio'], $_POST['data_fim'] );
            if (!$banner_cadastrado) { //Erro caso não for cadastrado no banco
                alert("Erro ao cadastrar banner no banco.");
                mudarDePagina("../partes/visualizarBanners.php");
                unlink($path); //Apaga a imagem, pois não subiu para o banco
                die();
            }
            unset($_POST['enviado']);
            mudarDePagina("../partes/visualizarBanners.php");
        }

    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="row g-2" action="" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <label class="form-label" for="nome">Nome do Banner</label>
                        <input class="form-control" required id="nome" name="nome" type="text">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label"for="link">Link de Redirecionamento</label>
                        <input class="form-control"required id="link" name="link" type="text">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"for="data_inicio">Selecione a data de inicio de exibição</label>
                        <input class="form-control" required id="data_inicio" type="date" name="data_inicio">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"for="data_fim">Selecione a data final para exibição</label>
                        <?php
                        $dt_get = date('Y-m-d', time() + 86400);
                        echo "<input required id='data_fim' type='date' min='$dt_get'  name='data_fim'>";
                        ?>                                              
                    </div>
                    <div class="col-md-12">
                        <label class="form-label"for="sequencia">Selecione a posição que o banner deve aparecer</label>
                    </div>
                    <div class="col-md-2">
                        <input class="form-control" required type="number" id="sequencia" name="sequencia">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label"for="nova_janela">Abre outra página?</label>
                        <div class="col-md-12">
                            <label class="form-check-label"for="rd_sim">Sim</label>
                            <input class="form-check-input" required id="rd_sim" value="s" name="nova_janela" type="radio">
                        </div>
                        <div class="col-md-12">
                            <label class="form-check-label"for="rd_sim">Não</label>
                            <input class="form-check-input" required id="rd_sim" name="nova_janela" value="n" type="radio">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="arquivo">Selecione a imagem: </label>
                        <input class="form-control" required id="arquivo" name="arquivo" type="file"> 
                    </div>
                    <div class="col-md-4 mt-3">
                        <input class="form-control" name="enviado" type="submit" value="Enviar Dados">
                    </div>
                </form>
                <a href="../partes/visualizarBanners.php"><button class="mt-3 mb-3 btn btn-warning">View Banners</button></a>
            </div> <!-- Fim da div col-->
        </div> <!-- Fim da div row-->
    </div> <!-- Fim da div container-->
</body>
</html>