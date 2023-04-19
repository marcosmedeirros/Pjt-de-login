<?php
include '../model/crudGames.php';

$opcao = $_POST['opcao'];

switch ($opcao) {
    case 'Cadastrar':
        cadastrarGame(
            $_POST["nome"],
            $_POST["genero"],
            $_POST["datalanc"],
            $_POST['id']
        );
        header("Location: ../view/index.php");
        break;
    case 'Editar':
        editarGame(
            $_POST["id"],
            $_POST["nome"],
            $_POST["genero"],
            $_POST["datalanc"]
        );
        header("Location: ../view/index.php");
        break;
    case 'Excluir':
        excluirGame(
            $_POST["id"]
        );
        header("Location: ../view/index.php");
        break;
}
