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

    <!-- Cadastar endereço -->

    <?php 
        $url = $_GET['url'];
    ?>
    <div class="container">
        <form action="<?= URL ?>/<?= $url?>" method="post">
            <div class="card mt-5">
                <h5 class="card-header text-center">Endereço</h5>
                <div class="card-body">
                    <!-- Endereco -->
                    <div id="add-endereco" class="d-flex flex-row-reverse bd-highlight">
                        <div class="p-2 bd-highlight"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button></div>

                    </div>
                    <div class="mb-3" id="endereco">

                        <div class="mb-3">
                            <label for="" class="form-label">CEP<sup class="text-danger">*</sup></label>
                            <input type="text" id="cep" name="cep" class="form-control <?= $dados['cep_erro'] ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback">
                                <?= $dados['cep_erro'] ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Rua<sup class="text-danger">*</sup></label>
                            <input type="text" id="rua" name="rua" class="form-control <?= $dados['rua_erro'] ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback">
                                <?= $dados['rua_erro'] ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Numero Casa<sup class="text-danger">*</sup></label>
                            <input type="text" id="rua" name="numero-casa" class="form-control <?= $dados['numero-casa_erro'] ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback">
                                <?= $dados['numero-casa_erro'] ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Complemento<sup class="text-danger">*</sup></label>
                            <input type="text" id="complemento" name="complemento" class="form-control <?= $dados['complemento_erro'] ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback">
                                <?= $dados['complemento_erro'] ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Bairro<sup class="text-danger">*</sup></label>
                            <input type="text" id="bairro" name="bairro" class="form-control <?= $dados['bairro_erro'] ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback">
                                <?= $dados['bairro_erro'] ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Cidade</label>
                            <input type="text" id="cidade" name="city" disabled class="form-control <?= $dados['city_erro'] ? 'is-invalid' : '' ?>">
                            <input type="text" id="city" name="city" class="form-control" style="display: none">
                            <div class="invalid-feedback">
                                <?= $dados['city_erro'] ?>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">UF</label>
                            <input type="text" id="uf" name="estado" disabled class="form-control <?= $dados['estado_erro'] ? 'is-invalid' : '' ?>">
                            <input type="text" id="estado" name="estado" class="form-control" style="display: none">
                            <div class="invalid-feedback">
                                <?= $dados['estado_erro'] ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
        </form>
    </div>

    <script src="<?= URL ?>/public/js/jquery-3.6.0.min.js"></script>
    <script src="<?= URL ?>/public/js/viaCEP.js"></script>
    <script src="<?= URL ?>/public/js/jquery.maskedinput-1.1.4.pack.js"></script>
</body>

</html>