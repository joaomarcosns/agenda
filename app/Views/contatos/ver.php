<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>/public/css/style.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid"> <button class="navbar-toggler navbar-toggler-right border-0 p-0" type="button" data-toggle="collapse" data-target="#navbar20">
                <p class="navbar-brand text-white mb-0"> <i class="fa d-inline fa-lg fa-stop-circle"></i> AGENDA </p>
            </button>
            <div class="collapse navbar-collapse" id="navbar20">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> <a class="nav-link" href="<?= URL ?>/contatos/index">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= URL ?>/contatos/cadastar">Cadastrar</a> </li>
                </ul>
                <p class="d-none d-md-block lead mb-0 text-white"> <i class="fa d-inline fa-lg fa-stop-circle"></i> <b> AGENDA</b> </p>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-1"> <a class="nav-link" target="_blank" href="https://github.com/joaomarcosns/agenda"> <i class="fa fa-github fa-fw fa-lg"></i> </a> </li>
                    <li class="nav-item mx-1"> <a class="nav-link" href="<?= URL ?>/usuarios/sair"> <i class="fa fa-power-off fa-fw fa-lg"></i> </a> </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-5">
        <!-- Contatos -->
        <div class="card text-center">
            <div class="card-header h1">
                Contatos
            </div>
            <div class="card-body">
                <?php foreach ($dados['contato'] as $contato) : ?>
                    <h5 class="card-title"><?= $contato->nome ?></h5>
                <?php endforeach; ?>
            </div>

        </div>

        <!-- Endereço -->

        <div class="card text-center mt-5 h1">
            <div class="card-header">
                Telefones
            </div>
            <div class="card-body">
                <?php foreach ($dados['telefone'] as $telefone) : ?>
                    <h5 class="card-title">(<?= $telefone->ddd ?>) <?= $telefone->numero ?></h5>
                <?php endforeach; ?>
            </div>
        </div>


        <div class="card text-center mt-5 ">
            <div class="card-header h1">
                Endereço
            </div>
            <div class="card-body">
                <?php foreach ($dados['endereco'] as $endereco) : ?>
                    <h5 class="card-title">CEP: <?= $endereco->cep ?></h5>
                    <h5 class="card-title">Rua: <?= $endereco->logradouro ?></h5>
                    <h5 class="card-title">Complemento<?= $endereco->complemento ?></h5>
                    <h5 class="card-title">Bairro: <?= $endereco->bairro ?></h5>
                    <h5 class="card-title">cidade: <?= $endereco->localidade ?></h5>
                    <h5 class="card-title">Estado: <?= $endereco->uf ?></h5>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>