<?php
    include 'topo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
</head>
<body>
    <div class="container-sm">
        <div class="row mt-5 mb-5">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    
                    <?php
                    include '../auxiliar/conexao.php';
                    $banners = showBanners();
                    $primeiro = true;
                    foreach ($banners as $banner) {
                        $path_para_imagem = $banner[4];
                        $path_para_redirecionar = $banner[2];
                        $target = '_blank';
                        if ($banner[3] == 'n') {
                            $target = "";
                        }
                        if($primeiro){
                            echo "<div class='carousel-item active'>
                            <a href='$path_para_redirecionar' target='$target'>
                                <img src='$path_para_imagem' class='d-block w-100' alt='...'>
                            </a>
                          </div>";
                          $primeiro = false;
                        }else {
                            echo "<div class='carousel-item'>
                            <a href='$path_para_redirecionar' target='$target'>
                                <img src='$path_para_imagem' class='d-block w-100' alt='...'>
                            </a>
                          </div>";
                        }

                    }
                    
                    ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div> <!-- Fim da div row banner -->
        <div class="row mb-5 mx-auto align-items-center">
            <div class="col-xs-12 col-sm-4 mx-auto d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/300x250/4682B4%20?Text=Digital.com" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div> <!-- fim da div card - 1 -->
            </div> <!-- Fim da div col card - 1 --> 
            <div class="col-xs-12 col-sm-4 mx-auto d-flex justify-content-center">
                <div class="card text-align-center" style="width: 18rem;">
                    <img src="https://via.placeholder.com/300x250/4682B4%20?Text=Digital.com" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 mx-auto d-flex justify-content-center">
                <div class="card text-align-center" style="width: 18rem;">
                    <img src="https://via.placeholder.com/300x250/4682B4%20?Text=Digital.com" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> <!-- Fim da div de card unico -->
        </div><!-- Fim da div row card's 1-3 --> 
        <div class="row mb-5 mx-auto align-item-center">
            <div class="col-xs-12 col-sm-4 mx-auto d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/300x250/4682B4%20?Text=Digital.com" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div> <!-- fim da div card - 1 -->
            </div> <!-- Fim da div col card - 1 --> 
            <div class="col-xs-12 col-sm-4 mx-auto d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/300x250/4682B4%20?Text=Digital.com" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 mx-auto d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/300x250/4682B4%20?Text=Digital.com" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div><!-- Fim da div row card's 3-6-->
    </div><!-- Fim da div container-sm-->
    <?php
        include 'rodape.php';
    ?>
</body>
</html>