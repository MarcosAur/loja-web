<?php
include '../utilitarios/redirecionar.php';
include '../auxiliar/conexao.php';
if (!isset($_GET['id'])) {
    echo "<script> alert('Banner Não informado');</script>";
    mudarDePagina('/partes/visualizarBanners.php');
}else{
    $id = $_GET['id'];
    //Validar se o banner existe
    $banner = findBanner($id);
    if ($banner != null) {
        $arquivo_deletado = unlink($banner["caminho_para_imagem"]);
        if($arquivo_deletado){ // Verificar se o banner foi removido da pasta 'img/banners'
            $deletado_do_banco = deletarBanner($id);
            if ($deletado_do_banco) { // Verificar se o banner foi deletado do banco
                echo "
                <script> alert('Banner deletado');</script>";

            }else { // Caso dê erro na deleção do banco
                echo "<script> alert('Erro ao deletar do banco');</script>";
            }
            
        }else{ //Caso dê erro na deleção do banner no servidor
            echo "<script> alert('Erro ao deletar arquivo');</script>";
        } 

    }else{
        echo "<script> alert('Banner não existe no sistema');</script>";
    }
    mudarDePagina('/loja-web/partes/visualizarBanners.php');


    /*
    echo "<script> alert('Banner Deletado');</script>";
    mudarDePagina('/partes/visualizarBanners.html');
    */
}

?>