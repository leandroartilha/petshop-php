<?php
include("Conexao.php");
$pet = selecionarPetID($_POST["id"]);

?>
<head>
    <meta charset="UTF-8">
    <title>Alterar Pet</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form style="margin: 30px;" name="dadosCliente" action="Conexao.php" method="post">
    <h1>Alterar Clientes</h1>
    <hr>
    <a class="btn btn-primary" href="Index.php">Listar Pets</a>
    <br>
    <br>
    <h4>Preencha com as novas Informações</h4>
    <br>
    <h6>Informações pessoais do pet</h6>
    <hr>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Nome do pet</label>
            <input type="text" class="form-control" name="nome" value="<?= $pet["nome"] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Idade</label>
            <input type="text" class="form-control" name="idade" value="<?= $pet["idade"] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Raça</label>
            <input type="text" class="form-control" name="raça" value="<?= $pet["raça"] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Nome do Dono</label>
            <input type="text" class="form-control" name="nomedono" value="<?= $pet["nomedono"] ?>">
        </div>
    </div>

    <input type="hidden" name="acao" value="alterar">
    <input type="hidden" name="id" value="<?= $pet["id"] ?>">
    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
</form>