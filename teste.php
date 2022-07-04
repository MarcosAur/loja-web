<?php
include 'auxiliar/conexao.php';
$produtos = getAll('produto');

foreach ($produtos as $produto) {
    $id = $produto[0];
    $nome = $produto[1];
    $desc = $produto[2];
    $img = $produto[3];
    echo "<h1>$id - $nome<h1>";
    echo "<img src='$img' alt='produto'>";
    echo "<p>$desc</p>";
}
?>
