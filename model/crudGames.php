<?php
include 'conexaoBD.php';

function cadastrarGame($nome, $genero, $datalanc, $codUS)
{
    connect();
    query("INSERT INTO jogos (nome, genero, datalanc, codUS)
         VALUES('$nome', '$genero', '$datalanc', $codUS)");
    close();
}

function mostrarGame($id)
{
    connect();
    $consulta = query("SELECT * FROM jogos WHERE
                       codUS = $id");
    close();
    $resultados = [];
    if (mysqli_num_rows($consulta) > 0) {
        while ($linha = mysqli_fetch_assoc($consulta)) {
            $resultados[] = $linha;
        }
    }
    return $resultados;
}

function mostrarGameAlterar($id)
{
    connect();
    $consulta = query("SELECT * FROM jogos WHERE id = $id");
    close();
    $linha = mysqli_fetch_assoc($consulta);
    return $linha;
}

function editarGame($id, $nome, $genero, $datalanc)
{
    connect();
    query("UPDATE jogos SET nome='$nome', genero='$genero',
    datalanc='$datalanc' WHERE id=$id");
    close();
}

function excluirGame($id)
{
    connect();
    query("DELETE FROM jogos WHERE id=$id");
    close();
}
