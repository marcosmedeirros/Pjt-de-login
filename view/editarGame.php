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
                            <li><a class="dropdown-item" href="index.php">Visualizar</a></li>
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
    <div class="container-sm">
        <h1 class="text-center mt-4 ">Editar Games</h1>

        <?php
        include '../model/crudGames.php';
        $codigo = $_GET["id"];
        $resultado = mostrarGamealterar($codigo);
        ?>
        <form method="post" action="../control/controleGames.php">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control mb-4" id="nome" name="nome" value="<?= $resultado['nome'] ?>">
            <label for="genero" class="form-label">Digite o genero:</label>
            <input type="text" class="form-control mb-4" id="genero" name="genero" value="<?= $resultado['genero'] ?>">
            <label for="datalanc" class="form-label">Data de Lancamento:</label>
            <input type="text" class="form-control mb-4" id="datalanc" name="datalanc" value="<?= $resultado['datalanc'] ?>">
            <input type="hidden" name="id" value="<?= $resultado['id'] ?>">
            <button type="submit" class=" mt-4 btn btn-light" name="opcao" value="Editar">Editar</button>
            <button type="submit" class=" mt-4 btn btn-danger" name="opcao" value="Excluir">Excluir</button>
            <a class="btn btn-light mt-4" href="index.php">Cancelar</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="../model/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="../model/mascaras.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>