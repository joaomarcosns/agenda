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
    <link rel="shortcut icon" href="<?= URL ?>/public/img/calendar-alt-regular.svg" type="image/x-icon">



</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark cusSticky"> <a class="navbar-brand" href="<?= URL ?>/contatos/index" data-abc="true">Agenda</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link" href="<?= URL ?>/contatos/cadastar" data-abc="true">Cadastar</a> </li>
                <li class="nav-item"> <a class="nav-link" target="_blank" href="https://github.com/joaomarcosns/agenda" data-abc="true"><i class="fa fa-github fa-fw fa-lg"></i></a> </li>
                <li class="nav-item"> <a class="nav-link" href="<?= URL ?>/usuarios/sair" data-abc="true"><i class="fa fa-power-off fa-fw fa-lg"></i></a> </li>
            </ul>
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

        <?php foreach ($dados['telefone'] as $telefone) : ?>
            <div class="card  mt-5 h1">
                <div class="card-header">
                    Telefones
                </div>
                <div class="card-body">
                    <h5 class="card-title">(<?= $telefone->ddd ?>) <?= $telefone->numero ?></h5>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Endereço -->
        <?php foreach ($dados['endereco'] as $endereco) : ?>
        <div class="card  mt-5 ">
            <div class="card-header h1">
                Endereço
            </div>
            <div class="card-body">
                
                    <h5 class="card-title">CEP: <?= $endereco->cep ?></h5>
                    <h5 class="card-title">Rua: <?= $endereco->logradouro ?></h5>
                    <h5 class="card-title">Complemento: <?= $endereco->complemento ?></h5>
                    <h5 class="card-title">Bairro: <?= $endereco->bairro ?></h5>
                    <h5 class="card-title">Cidade: <?= $endereco->localidade ?></h5>
                    <h5 class="card-title">Estado: <?= $endereco->uf ?></h5>
                
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>

</html>