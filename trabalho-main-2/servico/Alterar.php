<?php
include("Conexao.php");
$servico = selecionarservicoID($_POST["id"]);

?>
<head>
    <meta charset="UTF-8">
    <title>Alterar Serviço</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form style="margin: 30px;" name="dadosCliente" action="Conexao.php" method="post">
    <h1>Alterar Serviço</h1>
    <hr>
    <a class="btn btn-primary" href="Index.php">Listar Serviço</a>
    <br>
    <br>
    <h4>Preencha com as novas Informações</h4>
    <br>
    <h6>Informações do Serviço</h6>
    <hr>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Serviço</label>
            <input type="text" class="form-control" name="servico" value="<?= $servico["servico"] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Preço</label>
            <input type="text" class="form-control" name="preco" value="<?= $servico["preco"] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Agendar</label>
            <input type="text" class="form-control" name="agendamento" value="<?= $servico["agendamento"] ?>">
        </div>
    </div>


    <input type="hidden" name="acao" value="alterar">
    <input type="hidden" name="id" value="<?= $servico["id"] ?>">
    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
</form>