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
            <form class="form-inline my-1 my-lg-0">
                <input list="contato" type="text" class="form-control" placeholder="Pesquisar pelo nome do contato" id="search" autocomplete="off">
                <datalist id="contato">
                    <?php foreach ($dados['todos'] as $contatos) : ?>
                        <option value="<?= $contatos->nome ?>"></option>
                    <?php endforeach; ?>
                </datalist>
            </form>
        </div>
    </nav>



    <!-- Pesquisar -->
    <div class="container mt-5">
        <?=
        Sessao::mensagem('contato');
        Sessao::mensagem('endereco');
        ?>

        <table id="table-item" class="table table-bordered bg-light mt-5 table-responsive-sm table-responsive-md">
            <thead>
                <tr>
                    <th>Nome do Contato</th>
                    <th>Data de criação</th>
                    <th>Adicionar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados['todos'] as $contatos) : ?>
                    <tr>
                        <td><?= $contatos->nome ?></td>
                        <td><?= Validar::dataBr($contatos->criado_em) ?></td>
                        <td>
                            <a class="btn btn-primary btn-sm ml-2" href="<?= URL ?>/contatos/cadastarEndereco/<?= $contatos->id ?>"><i class="fa fa-plus"><i class="fas fa-home"></i></i></a>
                            <a href="#"></a>
                            <a class="btn btn-success btn-sm ml-2"href="<?= URL ?>/contatos/ver/<?= $contatos->id ?>"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#search").keyup(function() {
                var filter, table, td, i, txtValue;
                filter = $(this).val().toUpperCase();
                table = $("#table-item > tbody > tr")

                for (i = 0; i < table.length; i++) {

                    td = $("#table-item > tbody > tr").eq(i).children("td")[0];

                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            table[i].style.display = "";
                        } else {
                            table[i].style.display = "none";
                        };
                    };
                };
            });
        });
    </script>

</body>

</html>