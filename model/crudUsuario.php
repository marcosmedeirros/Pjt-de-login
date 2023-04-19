<?php
include 'conexaoBD.php';

function cadastrarUsuario($nome, $senha)
{
    connect();
    query("INSERT INTO usuario (nome, senha) VALUES ('$nome', '$senha')");
    close();
}

function buscarUsuario($nome)
{
    connect();
    $return = query("SELECT * FROM usuario WHERE nome = '$nome'");
    close();

    $returnsep = mysqli_fetch_assoc($return);
    return $returnsep;
}
