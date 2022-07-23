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
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="nome">Nome do Banner</label>
            <input required id="nome" name="nome" type="text">
        </div>
        <br>
        <div>
            <label for="link">Link de Redirecionamento</label>
            <input required id="link" name="link" type="text">
        </div>
        <br>
        <div>
            <label for="data_inicio">Selecione a data de inicio de exibição do banner</label>
            <input required id="data_inicio" type="date" name="data_inicio">
        </div>
        <br>
        <div>
            <label for="data_fim">Selecione a data final para exibição</label>
            <?php
            $dt_get = date('Y-m-d', time() + 86400);
            echo "<input required id='data_fim' type='date' min='$dt_get'  name='data_fim'>";
            ?>                                              
        </div>
        <br>
        <div>
            <label for="sequencia">Selecione a posição que o banner deve aparecer</label>
            <input required type="number" id="sequencia" name="sequencia">
        </div>
        <div>
            <label for="nova_janela">Abre outra página?</label>
            <div>
                <label for="rd_sim">Sim</label>
                <input required id="rd_sim" value="s" name="nova_janela" type="radio">
            </div>
            <div>
                <label for="rd_sim">Não</label>
                <input required id="rd_sim" name="nova_janela" value="n" type="radio">
            </div>
        </div>
        <br>
        <div>
            <label for="arquivo">Selecione a imagem: </label>
            <input required id="arquivo" name="arquivo" type="file">
            
        </div>
        <br>
        <input name="enviado" type="submit" value="Enviar Dados">
    </form>
    <br>
    <a href="../partes/visualizarBanners.php"><button>View Banners</button></a>
</body>
</html>