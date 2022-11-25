<?php
include("Conexao.php");
$cliente = selecionarClienteID($_POST["id"]);

?>
<head>
    <meta charset="UTF-8">
    <title>Alterar Cliente</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form style="margin: 30px;" name="dadosCliente" action="Conexao.php" method="post">
    <h1>Alterar Clientes</h1>
    <hr>
    <a class="btn btn-primary" href="Index.php">Listar Clientes</a>
    <br>
    <br>
    <h4>Preencha com as novas Informações</h4>
    <br>
    <h6>Informações pessoais</h6>
    <hr>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Nome </label>
            <input type="text" class="form-control" name="nome" value="<?= $cliente["nome"] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" value="<?= $cliente["sobrenome"] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Telefone</label>
            <input type="text" class="form-control" name="telefone" value="<?= $cliente["telefone"] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Data de Nascimento</label>
            <input type="text" class="form-control" name="nascimento" value="<?= $cliente["nascimento"] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Nome do Pet</label>
            <input type="text" class="form-control" name="nomepet" value="<?= $cliente["nomepet"] ?>">
        </div>
    </div>

    <input type="hidden" name="acao" value="alterar">
    <input type="hidden" name="id" value="<?= $cliente["id"] ?>">
    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
</form>