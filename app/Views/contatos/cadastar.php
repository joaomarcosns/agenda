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

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid"> <button class="navbar-toggler navbar-toggler-right border-0 p-0" type="button" data-toggle="collapse" data-target="#navbar20">
                <p class="navbar-brand text-white mb-0"> <i class="fa d-inline fa-lg fa-stop-circle"></i> BBBOOTSTRAP </p>
            </button>
            <div class="collapse navbar-collapse" id="navbar20">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> <a class="nav-link" href="#">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= URL ?>/contatos/cadastar">Cadastrar</a> </li>
                </ul>
                <p class="d-none d-md-block lead mb-0 text-white"> <i class="fa d-inline fa-lg fa-stop-circle"></i> <b> AGENDA</b> </p>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-1"> <a class="nav-link" target="_blank" href="https://github.com/joaomarcosns/agenda"> <i class="fa fa-github fa-fw fa-lg"></i> </a> </li>
                    <li class="nav-item mx-1"> <a class="nav-link" href="<?= URL ?>/usuario/sair"> <i class="fa fa-power-off fa-fw fa-lg"></i> </a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- form -->
    <div class="container container-sm mt-5 ">
        <div class="card">
            <h5 class="card-header text-center">Agenda</h5>
            <div class="card-body">

                <form action="" method="post" class="form-horizontal">
                    <div class="mb-3">
                        <label for="" class="form-label">Nome<sup class="text-danger">*</sup></label>
                        <input type="text" id="nome" name="nome" class="form-control">
                    </div>
                    <!-- Telefone -->
                    <div id="add-telefone" class="d-flex flex-row-reverse bd-highlight">
                        <div class="p-2 bd-highlight"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button></div>
                    </div>
                    <div class="mb-3 " id="telefone">
                        <div class="mb-3">
                            <label for="" class="form-label">DDD<sup class="text-danger">*</sup></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" id="ddd" name="ddd[]">
                                <button class="btn btn-danger" type="button" id="button-addon1"><i class="fa fa-minus"></i></button>
                                </span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Numero<sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" id="numero" name="numero[]">
                        </div>
                    </div>
                    <!-- End telefone -->

                    <!-- Endereco -->
                    <div id="add-endereco" class="d-flex flex-row-reverse bd-highlight">
                        <div class="p-2 bd-highlight"><button class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button></div>

                    </div>
                    <div class="mb-3" id="endereco">

                        <div class="mb-3">
                            <label for="" class="form-label">CEP<sup class="text-danger">*</sup></label>
                            <input type="text" id="cep" name="cep" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Rua<sup class="text-danger">*</sup></label>
                            <input type="text" id="rua" name="rua" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Complemento<sup class="text-danger">*</sup></label>
                            <input type="text" id="complemento" name="complemento" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Bairro<sup class="text-danger">*</sup></label>
                            <input type="text" id="bairro" name="bairro" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Cidade</label>
                            <input type="text" id="cidade" name="cidade" disabled class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">UF</label>
                            <input type="text" id="uf" name="uf" disabled class="form-control">
                        </div>
                    </div>
                    <!-- End endereco -->
            </div>
            <a href="#" type="submit" class="btn btn-primary">Submit</a>
            </form>
        </div>
    </div>
    </div>



    <script src="<?= URL ?>/public/js/jquery-3.6.0.min.js"></script>
    <script src="<?= URL ?>/public/js/viaCEP.js"></script>
    <script src="<?= URL ?>/public/js/jquery.maskedinput-1.1.4.pack.js"></script>
    <script>
        $(document).ready(function() {
            $("#cep").mask("99.999-999");
        });
    </script>

    <script>
        $("#add-telefone").click(function() {
            $("#telefone").append('<div class="mb-3"><label for="" class="form-label">DDD<sup class="text-danger">*</sup></label><div class="input-group mb-3"><input type="text" class="form-control" aria-label="Recipients username" aria-describedby="basic-addon2" id="ddd" name="ddd[]"><button class="btn btn-danger" type="button" id="button-addon1"><i class="fa fa-minus"></i></button></span></div></div><div class="mb-3"><label for="" class="form-label">Numero<sup class="text-danger">*</sup></label><div class="input-group mb-3"><input type="text" class="form-control" aria-label="Recipients username" aria-describedby="basic-addon2" id="numero" name="numero[]"><button class="btn btn-danger" type="button" id="button-addon1"><i class="fa fa-minus"></i></button></span></div></div>');
        })
    </script>
</body>




</html>