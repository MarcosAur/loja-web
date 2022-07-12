<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topo</title>
    <link rel="stylesheet" href="../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="manifest" href="../img/">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
</head>
<body>
    <div class="container-fluid bg-secondary">
        <div class="row">
            <div class="col-xs-12 col-sm-1">
                <img class="" src="../img/android-chrome-192x192.png" width="80px">
            </div> <!-- Fim da div col ícone--> 
            <div class="col-xs-12 col-sm-2 mt-3">
                <button class="navbar-toggler btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
					<i class="bi bi-list botao-menu"></i>
                </button>
            </div> <!-- Fim da div col botão menu-->
			<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<img src="../img/icon-logon.svg" alt="ícone para representar o usuário conectado" class="icon-logon">
					<?php
						$username = "Usuario não logado";
						if (isset($_COOKIE['username'])){
						$username = $_COOKIE['username'];
						}
						echo "<p class='icon-logon-desc'>$username</p> ";
          			?>
					<ul class="dropdown-menu">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Carrinho</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								Opções
							</a>
							<ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
								<li><a class="dropdown-item" href="./tela-login.php">Login</a></li>
								<li><a class="dropdown-item" href="./tela-cadastro.php">Cadastro</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="../auxiliar/validacao.php?desconectar=true">Desconectar</a></li>
							</ul>
						</li>
					</ul>
				</div> <!-- Div fechando o off canvas body -->
			</div>
			<div class="col-xs-12 col-sm-4 mt-3 mb-3">
				<form class="d-flex align-items-center justify-content-center me-5 mt-1" role="search">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-warning" type="submit">Search</button>
				</form>
			</div> <!-- Fim da div col barra de pesquisa-->
            <div class="col-xs-12 col-sm-1 mt-4 mb-3">
				<div class="btn-group">
					<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
						aria-expanded="false">
						Conectar-se
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="./tela-login.php">Login</a></li>
						<li><a class="dropdown-item" href="./tela-cadastro.php">Cadastro</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="../auxiliar/validacao.php?desconectar=true">Desconectar</a></li>
					</ul>
                </div> <!-- Fim da div botão-->
            </div> <!-- Fim da div opções-->
            <div class="col-xs-12 col-sm-2">
                <p class="text-white mt-2 mb-2 p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    Carrinho
                </p>
            </div> <!-- Fim da div botão carrinho -->
			<div class="col-xs-12 col-sm-2 p-3">
				<i class="bi bi-instagram icon-social"></i>
				<i class="bi bi-facebook icon-social"></i>
				<i class="bi bi-twitter icon-social"></i>
			</div> <!-- Fim da div dos ícones rede social-->
		</div> <!-- Fim da div row nav-->
    </div> <!--Fim da div container-fluid-->
</body>
</html>