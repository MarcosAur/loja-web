<?php
    if(!isset($_GET['id'])){
        //To-Do: Validar se o parâmetro do get (id banner) foi passado corretamente   
        echo "<script> alert('Parâmetro get não informado');</script>";
    }

    if(isset($_POST['enviado'])){ //To-Do: Validar se houve envio do formulário para alteração dos dados dos banner
        include "./validacao.php";
        $id = $_GET['id'];

        $banner = findBanner($id); //Validar se o banner existe

        if ($banner != null) { // Verificação de quais dados foram alterados. Caso não tenha sido enviado o dado do BD permanece

            if(isset($_POST['nome'])){
                $nome = $_POST['nome'];
            }else{
                $nome = $banner['nome'];
            }

            if(isset($_POST['link'])){
                $link = $_POST['link'];
            }else{
                $link = $banner['link_destino'];
            }

            if(isset($_POST['nova_janela'])){
                $janela = $_POST['nova_janela'];
            }else{
                $janela = $banner['nova_janela'];
            }

            if(isset($_POST['sequencia'])){
                $sequencia = $_POST['sequencia'];
            }else{
                $sequencia = $banner['sequencia'];
            }

            if(isset($_POST['data_inicio'])){
                $data_inicio = $_POST['data_inicio'];
            }else{
                $data_inicio = $banner['data_inicio'];
            }

            if(isset($_POST['data_fim'])){
                $data_fim = $_POST['data_fim'];
            }else{
                $data_fim = $banner['data_final'];
            }
            //Validar se foi enviada uma nova imagem
            $arquivo = $_FILES['arquivo'];
            if ($arquivo['size'] != 0) {
                unlink($banner['caminho_para_imagem']);
                $path = salvarBanner(str_replace("/","",$arquivo['tmp_name']), $arquivo);
            }else {
                $path = $banner['caminho_para_imagem'];
            }
            $alterado = updateBanner($id, $nome, $link, $janela, $sequencia, $path, $data_inicio, $data_fim);
            if ($alterado){
                echo "<script> alert('Registro alterado');</script>";
            }else {
                echo "<script> alert('Registro não alterado');</script>";
            }
            unset($_POST['enviado']);
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Cadastrar Banner</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="nome">Nome do Banner</label>
            <input  id="nome" name="nome" type="text">
        </div>
        <br>
        <div>
            <label for="link">Link de Redirecionamento</label>
            <input  id="link" name="link" type="text">
        </div>
        <br>
        <div>
            <label for="data_inicio">Selecione a data de inicio de exibição do banner</label>
            <input  id="data_inicio" type="date" name="data_inicio">
        </div>
        <br>
        <div>
            <label for="data_fim">Selecione a data final para exibição</label>
            <input  id="data_fim" type="date" format="dd/mm/yyyy" name="data_fim"s>
        </div>
        <br>
        <div>
            <label for="sequencia">Selecione a posição que o banner deve aparecer</label>
            <input  type="number" id="sequencia" name="sequencia">
        </div>
        <div>
            <label for="nova_janela">Abre outra página?</label>
            <div>
                <label for="rd_sim">Sim</label>
                <input  id="rd_sim" value="s" name="nova_janela" type="radio">
            </div>
            <div>
                <label for="rd_sim">Não</label>
                <input  id="rd_sim" name="nova_janela" value="n" type="radio">
            </div>
        </div>
        <br>
        <div>
            <label for="arquivo">Selecione a imagem: </label>
            <input  id="arquivo" name="arquivo" type="file">
        </div>
        <br>
        <input name="enviado" type="submit" value="Enviar Dados">
    </form>
    <br>
    <a href="/partes/visualizarBanners.php"><button>View Banners</button></a>
</body>
</html>


<!-- 
    To-Do: Validar a data de inicio e fim
    To-Do: Formatar exibição data 
    To-Do: 
 -->