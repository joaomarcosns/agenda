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


    <!-- Form -->
    <form id="form">
        <div class="container">
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
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" id="ddd" name="ddd">

                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Numero do telefone<sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" id="numero" name="numero">

                        </div>
                    </div>
                    <!-- End telefone -->
                    <input type="button" class="btn btn-primary" value="Cadastar" id="submit">
                </div>
            </div>
        </div>
    </form>

    <script src="<?= URL ?>/public/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    
    <script>
        $('#form').on('click', '#submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= URL ?>/contatos/teste',
                type: "POST",
                data: {
                    ddd: $('#ddd').val(),
                    numero: $('#numero').val()
                },
                success: (res) => {
                    console.log(res);
                },
                error: (res) => {
                    console.log(res);
                }
            })
        });
    </script>
</body>

</html>