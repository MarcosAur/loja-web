<?php
    include 'topo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-sm">
        <div class="row mt-5">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <?php
                    include '../auxiliar/conexao.php';
                    $banners = getAll("banner");
                    foreach ($banners as $banner) {
                        $path = $banner[5];
                        echo "<div class='carousel-item active'>
                                <img src='$path' class='d-block w-100' alt='...'>
                              </div>";
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
        </div>
        <div class="row mt-5 mb-5 ms-5 me-3">
            <div class="col-xs-12 col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/300x250/4682B4%20?Text=Digital.com" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div> <!-- fim da div card - 1 -->
            </div> <!-- Fim da div col card - 1 --> 
            <div class="col-xs-12 col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/300x250/4682B4%20?Text=Digital.com" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/300x250/4682B4%20?Text=Digital.com" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div><!-- Fim da div row card's 1-3 --> 
        <div class="row mt-5 mb-5 ms-5 me-3">
            <div class="col-xs-12 col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/300x250/4682B4%20?Text=Digital.com" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div> <!-- fim da div card - 1 -->
            </div> <!-- Fim da div col card - 1 --> 
            <div class="col-xs-12 col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/300x250/4682B4%20?Text=Digital.com" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
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
</body>
</html>