<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Carrinho de compras</title>
</head>
<body>
    <?php
        include './topo.php';
    ?>
    <div class="container mt-5">
        <div class="row mb-1 mx-auto align-item-center">
            <div class="col d-flex justify-content-center">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="http://via.placeholder.com/300" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Nome do item</h5>
                                <p class="preco-carrinho pt-2">R$ 500</p>
                                <label for="qntd" value="1">Quantidade</label>
                                <input type="number" name="qntd" class="qntd-carrinho">
                                <a href="#" class="btn btn-danger">Excluir item</a>
                            </div> <!-- Final da div card-body-->
                        </div> <!-- Final da div card (col)-->
                    </div> <!-- Final da div card (row)-->
                </div> <!-- final da div card -->
            </div> <!-- Final da div col-->
        </div> <!-- Final da div row-->
        <div class="row mx-auto align-item center">
            <div class="col d-flex justify-content-center mb-3">
                <a href="#" class="btn btn-warning">
                    Finalizar compra
                </a>
            </div>
        </div> <!-- Fim da div row-->
    </div> <!-- Final da div container -->
</body>
<footer>
    <?php
        include './rodape.php';
    ?>
</footer>
</html>