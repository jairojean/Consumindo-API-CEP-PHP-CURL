<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <h1>Consulta Cep</h1>
    </div>
    <p>
        É feito uma requisição para a API do site "https://viacep.com.br/",
        buscando os dados do CEP informado em arquivo Json, transformados em um Objeto e exibido na tela.
    </p>
    <form action="index.php" method="GET">
        <label for="cep">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" placeholder="Seu CEP">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busca</button>
    </form>
    <?php
    require_once "api/api.php";

    $local = new Localizacao();
    $dados = $local->buscaCep($_GET['cep']);

    ?>
    <table class="table" border="1">
        <thead class="thead">
            <tr>
                <th scope="col">CEP</th>
                <th scope="col">Logradouro</th>
                <th scope="col">Bairro</th>
                <th scope="col">UF</th>
                <th scope="col">Localidade</th>
                <th scope="col">IBGE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo ($dados->cep); ?></th>
                <td> <?php echo ($dados->logradouro); ?> </td>
                <td> <?php echo ($dados->bairro); ?> </td>
                <td> <?php echo ($dados->uf); ?> </td>
                <td> <?php echo ($dados->localidade); ?> </td>
                <td> <?php echo ($dados->ibge); ?> </td>
            </tr>

        </tbody>
    </table>
    </section>



</body>

</html>