<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastar Contato</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>/public/css/style.css">
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

    <!-- form -->
    <form action="<?= URL ?>/contatos/cadastar" method="post">
        <div class="container container-sm mt-5 ">
            <div class="card">
                <h5 class="card-header text-center">Agenda</h5>
                <div class="card-body">

                    <div class="mb-3">
                        <label for="" class="form-label">Nome<sup class="text-danger">*</sup></label>
                        <input type="text" id="nome" name="nome" class="form-control <?= $dados['nome_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['nome'] ?>">
                        <div class="invalid-feedback">
                            <?= $dados['nome_erro'] ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-5">
                <h5 class="card-header text-center">Telefone</h5>
                <div class="card-body">
                    <!-- Telefone -->
                    <div id="add-telefone" class="d-flex flex-row-reverse bd-highlight">
                        <div class="p-2 bd-highlight"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button></div>
                    </div>
                    <div class="mb-3 " id="telefone">
                        <div class="mb-3">
                            <label for="" class="form-label">DDD<sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control  <?= $dados['ddd_erro'] ? 'is-invalid' : '' ?>" aria-label="Recipient's username" aria-describedby="basic-addon2" id="ddd" name="ddd" value="<?= $dados['ddd'] ?>">
                            <div class="invalid-feedback">
                                <?= $dados['ddd_erro'] ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Numero do telefone<sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control <?= $dados['numero_erro'] ? 'is-invalid' : '' ?>" id="numero" name="numero" value="<?= $dados['numero'] ?>">
                            <div class="invalid-feedback">
                                <?= $dados['numero_erro'] ?>
                            </div>
                        </div>
                    </div>
                    <!-- End telefone -->
                </div>
            </div>


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
                            <input type="text" id="cep" name="cep" class="form-control <?= $dados['cep_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['cep'] ?>">
                            <div class="invalid-feedback">
                                <?= $dados['cep_erro'] ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Rua<sup class="text-danger">*</sup></label>
                            <input type="text" id="rua" name="rua" class="form-control <?= $dados['rua_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['rua'] ?>">
                            <div class="invalid-feedback">
                                <?= $dados['rua_erro'] ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Numero Casa<sup class="text-danger">*</sup></label>
                            <input type="text" id="rua" name="numero-casa" class="form-control <?= $dados['numero-casa_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['numero-casa'] ?>">
                            <div class="invalid-feedback">
                                <?= $dados['numero-casa_erro'] ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Complemento<sup class="text-danger">*</sup></label>
                            <input type="text" id="complemento" name="complemento" class="form-control <?= $dados['complemento_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['complemento'] ?>">
                            <div class="invalid-feedback">
                                <?= $dados['complemento_erro'] ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Bairro<sup class="text-danger">*</sup></label>
                            <input type="text" id="bairro" name="bairro" class="form-control <?= $dados['bairro_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['bairro'] ?>">
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
                    </div>
                    <!-- End endereco -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>




    <script src="<?= URL ?>/public/js/jquery-3.6.0.min.js"></script>
    <script src="<?= URL ?>/public/js/viaCEP.js"></script>
    <script src="<?= URL ?>/public/js/jquery.maskedinput-1.1.4.pack.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="<?= URL ?>/public/js/mask.js"></script> -->
    <!-- <script src="<?= URL ?>/public/js/telefone.js"></script> -->

</body>

</html>