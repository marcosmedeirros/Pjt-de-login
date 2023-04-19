<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script src="../js/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="../js/mask.js" type="text/javascript"></script>
    <title>Games</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Steam</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Games
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cadastrarGame.php">Cadastrar</a></li>
                            <li><a class="dropdown-item" aria-current="page" href="index.php">Visualizar</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            session_start();
                            if (isset($_SESSION['nome'])) {
                                echo $_SESSION['nome'];
                            } else {
                                header("Location: paginaLogin.php");
                            }
                            ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../control/controleUsuario.php?opcao=Sair">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-md">
        <h1 class="mb-4 mt-4">Seus Games</h1>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Lançamento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../model/crudGames.php';
                $resultados = mostrarGame($_SESSION['id']);
                foreach ($resultados as $linha) :
                    echo "
                        <tr>
                            <td>$linha[nome]</td>
                            <td>$linha[genero]</td>
                            <td>$linha[datalanc]</td>
                            <td><a class='btn btn-light' href='editarGame.php?id=$linha[id]'>Editar</a></td>
                        </tr>
                        ";
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>