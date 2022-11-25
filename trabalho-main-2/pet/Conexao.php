<?php
if (isset($_POST['acao'])) {

    if ($_POST['acao'] == "inserir") {
        inserirPet();
    }

    if ($_POST['acao'] == "alterar") {
        alterarPet();
    }

    if ($_POST['acao'] == "excluir") {
        excluirPet();
    }
}

function abrirBanco()
{
    $conexao = new mysqli("localhost", "root", "", "petshop");
    return $conexao;
}

function inserirPet()
{
    $banco = abrirBanco();
    $sql = "INSERT INTO pet(nome, idade, raça, nomedono)" .
     "VALUES ('{$_POST["nome"]}','{$_POST["idade"]}','{$_POST["raça"]}','{$_POST["nomedono"]}')";
    $banco->query($sql);
    $banco->close();
    voltarInserir();
}

function listarPet()
{
    $banco = abrirBanco();
    $sql = "select * from pet ";
    $resultado = $banco->query($sql);
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function excluirPet()
{
    $banco = abrirBanco();
    $sql = "delete from pet where id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selecionarPetID($id)
{
    $banco = abrirBanco();
    $sql = "select * from pet where id=" . $id;
    $resultado = $banco->query($sql);
    $cliente = mysqli_fetch_assoc($resultado);
    return $cliente;
}

function alterarPet()
{
    $banco = abrirBanco();
    $sql = "UPDATE pet SET nome='{$_POST["nome"]}',idade='{$_POST["idade"]}',raça='{$_POST["raça"]}',nomedono='{$_POST["nomedono"]}' WHERE id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function voltarInserir()
{
    header("location:Inserir.php");
}

function voltarIndex()
{
    header("location:Index.php");
}