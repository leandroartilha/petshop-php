<?php
if (isset($_POST['acao'])) {

    if ($_POST['acao'] == "inserir") {
        inserirservico();
    }

    if ($_POST['acao'] == "alterar") {
        alterarservico();
    }

    if ($_POST['acao'] == "excluir") {
        excluirservico();
    }
}

function abrirBanco()
{
    $conexao = new mysqli("localhost", "root", "", "petshop");
    return $conexao;
}

function inserirservico()
{
    $banco = abrirBanco();
    $sql = "INSERT INTO servico(servico, preco, agendamento)" .
     "VALUES ('{$_POST["servico"]}','{$_POST["preco"]}','{$_POST["agendamento"]}')";
    $banco->query($sql);
    $banco->close();
    voltarInserir();
}

function listarServico()
{
    $banco = abrirBanco();
    $sql = "select * from servico";
    $resultado = $banco->query($sql);
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function excluirservico()
{
    $banco = abrirBanco();
    $sql = "delete from servico where id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selecionarservicoID($id)
{
    $banco = abrirBanco();
    $sql = "select * from servico where id=" . $id;
    $resultado = $banco->query($sql);
    $servico = mysqli_fetch_assoc($resultado);
    return $servico;
}

function alterarservico()
{
    $banco = abrirBanco();
    $sql = "UPDATE servico SET servico='{$_POST["servico"]}',preco='{$_POST["preco"]}',agendamento='{$_POST["agendamento"]}' WHERE id='{$_POST["id"]}'";
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