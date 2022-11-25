<?php
if (isset($_POST['acao'])) {

    if ($_POST['acao'] == "inserir") {
        inserirCliente();
    }

    if ($_POST['acao'] == "alterar") {
        alterarCliente();
    }

    if ($_POST['acao'] == "excluir") {
        excluirCliente();
    }
}

function abrirBanco()
{
    $conexao = new mysqli("localhost", "root", "", "petshop");
    return $conexao;
}

function inserirCliente()
{
    $banco = abrirBanco();
    $sql = "INSERT INTO cliente(nome, sobrenome, telefone, nascimento, nomepet)" .
     "VALUES ('{$_POST["nome"]}','{$_POST["sobrenome"]}', '{$_POST["telefone"]}', '{$_POST["nascimento"]}', '{$_POST["nomepet"]}')";
    $banco->query($sql);
    $banco->close();
    voltarInserir();
}

function listarCliente()
{
    $banco = abrirBanco();
    $sql = "select * from cliente ";
    $resultado = $banco->query($sql);
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function excluirCliente()
{
    $banco = abrirBanco();
    $sql = "delete from cliente where id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selecionarClienteID($id)
{
    $banco = abrirBanco();
    $sql = "select * from cliente where id=" . $id;
    $resultado = $banco->query($sql);
    $cliente = mysqli_fetch_assoc($resultado);
    return $cliente;
}

function alterarCliente()
{
    $banco = abrirBanco();
    $sql = "UPDATE cliente SET nome='{$_POST["nome"]}',sobrenome='{$_POST["sobrenome"]}',telefone='{$_POST["telefone"]}',nascimento='{$_POST["nascimento"]}',nomepet='{$_POST["nomepet"]}' WHERE id='{$_POST["id"]}'";
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