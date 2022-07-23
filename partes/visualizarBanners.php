<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Banners</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th colspan="5">Banners Cadastrados</th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Ordem</th>
                <th>Data Inicial de Exibição</th>
                <th>Data Final de Exibição</th>
                <th>Edição</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../auxiliar/conexao.php';
            $banners = getAll("banner");
            foreach ($banners as $banner) {
                $id = $banner[0];
                $nome = $banner[1];
                $data_ini = date_create($banner[6]);
                $dt_ini = date_format($data_ini,'d/m/Y');
                $data_fim = date_create($banner[7]);
                $dt_fim = date_format($data_fim,'d/m/Y');
                $sequencia = $banner[5];
            echo "<tr>
                <td>$id</td>
                <td>$nome</td>
                <td>$sequencia</td>
                <td>$dt_ini</td>
                <td>$dt_fim</td>
                <td>
                    <a href='/auxiliar/deletarBanner.php/?id=$id' class='btn btn-sm'> 
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-circle'>
                            <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                            <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
                          </svg>
                    </a>
                    <a href='/auxiliar/editarBanner.php/?id=$id' class='btn btn-sm'> 
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                          </svg>
                    </a>
                </td>
            </tr>";
            }
            ?>
        </tbody>
    </table>
    <center><a href="../auxiliar/cadastroBanner.php"><button class="btn btn-md btn-warning">Adicionar novo banner</button></a></center>
</body>
</html>