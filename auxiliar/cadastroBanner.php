<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Banner</title>
</head>
<body>
    <?php
    include "./validacao.php";
        if(isset($_POST['enviado'])){
            $arquivo = $_FILES['arquivo'];
            //echo ;
            
            $path = salvarBanner(str_replace("/","",$arquivo['tmp_name']), $arquivo);
            cadastrarBanner($_POST['nome'],$_POST['link'], $_POST['nova_janela'], $_POST['sequencia'], $path, $_POST['data_inicio'], $_POST['data_fim'] );
            unset($_POST['enviado']);
            
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
            <input required id="data_fim" type="date" format="dd/mm/yyyy" name="data_fim"s>
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
        <input name="enviado" type="submit" value="Enviar">
    </form>
</body>
</html>