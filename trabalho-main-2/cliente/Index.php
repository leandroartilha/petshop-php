<?php include 'Conexao.php';
$grupo = listarCliente();
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Listar Clientes</title>

    <style>
    a{
    text-decoration: none;
    color: #333333;
    margin: 3rem;
    }
</style>    

</head>

<body>

    <a href="http://localhost/trabalho-main-2/Index.html" >Voltar</a>

    <h1 style="text-align:center">Dados dos Clientes</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Telefone</th>
                <th>Nascimento</th>
                <th>Nome do Pet</th>
            </tr>

        </thead>

        <tbody>
            <?php
            foreach ($grupo as $cliente) { ?>
            <tr>
                <td><?= $cliente["nome"] ?></td>
                <td><?= $cliente["sobrenome"] ?></td>
                <td><?= $cliente["telefone"] ?></td>
                <td><?= $cliente["nascimento"] ?></td>
                <td><?= $cliente["nomepet"] ?></td>

                <th>
                    <form name="alterar" action="Alterar.php" method="POST">
                        <input type="hidden" name="id" value="<?= $cliente["id"] ?>" />
                        <input class="btn btn-primary" type="submit" name="editar" value="Editar" />
                    </form>
                </th>
                <th>
                    <form name="excluir" action="Conexao.php" method="POST">
                        <input type="hidden" name="id" value=<?= $cliente["id"] ?> />
                        <input type="hidden" name="acao" value="excluir" />
                        <input class="btn btn-primary" type="submit" value="Excluir" name="excluir" />
                    </form>
                </th>
            </tr>

            <?php }

            ?>
        <tbody>

    </table>
    <a class="btn btn-primary" role="button" href="Inserir.php" style="margin-left: 3rem; ">Adicionar
        Clientes</a>

    <table class="table">

</body>

</html>