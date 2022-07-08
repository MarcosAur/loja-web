<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topo</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
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
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
	<div class="container-fluid bg-secondary">
		<div class="row">
			<div class="col-xs-12 col-sm-1">
				<img class="logo-teste" src="../img/android-chrome-192x192.png" width="80px">
			</div>
			<div class="col-xs-12 col-sm-1">
				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
					aria-controls="offcanvasNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>

			<!-- Início Off canvas menu -->
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
			</div> <!-- Final div off-canvas -->
			<div class="col-xs-12 col-sm-4">
				<form class="d-flex search-position" role="search">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-warning" type="submit">Search</button>
				</form>
			</div> <!-- Final div barra de pesquisa-->
			<div class="col-xs-12 col-sm-6">
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
				</div> <!-- Essa div fecha o botão -->
			</div> <!-- Essa div fecha o menu opções -->
		</div> <!-- Final div row -->
	</div> <!-- Final da div container-->
</body>
<footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</footer>
</html>