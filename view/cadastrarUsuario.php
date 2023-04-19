<!DOCTYPE html>
<html lang="pt-br">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="../trabalho/CSS/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&family=Roboto+Mono&display=swap" rel="stylesheet">
        <title>Cadastrar</title>
    </head>
</head>

<body>
    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-md-10 mx-auto col-lg-5">
                <h1 class="text-center mt-4 p-4">Cadastrar Usuario</h1>
                <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="../control/controleUsuario.php">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Usuario">
                        <label for="nome">Usuario: </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
                        <label for="senha">Senha: </label>
                    </div>


                    <button class="btn btn-lg btn-dark" type="submit" name="opcao" value="Cadastrar" class="btn btn-secondary">Cadastrar</button>
                    <a class="row mt-2 px-3 text-dark" href="paginaLogin.php" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>