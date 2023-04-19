<?php
include '../model/crudUsuario.php';

if (isset($_POST['opcao'])) {
    $opcao = $_POST['opcao'];
} else {
    $opcao = $_GET['opcao'];
}
switch ($opcao) {
    case 'Cadastrar':
        cadastrarUsuario($_POST['nome'], sha1($_POST['senha']));
        header("Location: ../view/paginaLogin.php");
        break;
    case 'Entrar':
        $nome = $_POST['nome'];
        $senha = sha1($_POST['senha']);
        $banco = buscarUsuario($nome);
        if ($nome === $banco['nome']) {
            if ($senha === $banco['senha']) {
                session_start();
                $_SESSION['nome'] = $nome;
                $_SESSION['id'] = $banco['id'];;
                header("Location: ../view/index.php");
            } else {
                echo "<script>alert('Senha Incorreta!'); </script>";
                echo "<script>window.location='../view/paginaLogin.php'; </script>";
            }
        } else {
            echo "<script>alert('Nome Incorreto!'); </script>";
            echo "<script>window.location='../view/paginaLogin.php'; </script>";
        }
        break;
    case 'Sair':
        session_start();
        session_destroy();
        echo "<script>alert('Você Saiu!'); </script>";
        echo "<script>window.location='../view/paginaLogin.php'; </script>";
        break;
}
