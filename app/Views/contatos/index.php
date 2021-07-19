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
                <p class="navbar-brand text-white mb-0"> <i class="fa d-inline fa-lg fa-stop-circle"></i> BBBOOTSTRAP </p>
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

    <!-- Pesquisar -->
    <div class="container mt-5">
        <form>
            <label for="" class="text-center">Nome do contato: </label>
            <input list="contato" type="text" class="form-control" placeholder="Pesquisar pelo nome do contato" id="search"  autocomplete="off">

            <datalist id="contato">
                <?php foreach ($dados['todos'] as $contatos) : ?>
                    <option value="<?= $contatos->nome ?>"></option>
                <?php endforeach; ?>
            </datalist>
        </form>



        <table id="table-item" class="table table-bordered bg-light mt-5 table-responsive-sm table-responsive-md">
            <thead>
                <tr>
                    <th>Nome do Contato</th>
                    <th>Numero</th>
                    <th>CEP</th>
                    <th>Rua</th>
                    <th>Complemento</th>
                    <th>bairro</th>
                    <th>Cidade</th>
                    <th>uf</th>
                    <th>Numero da casa</th>
                    <th>Criação</th>
                    <th>Adicionar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados['todos'] as $contatos) : ?>
                    <tr>
                        <td><?= $contatos->nome ?></td>
                        <td>(<?= $contatos->ddd ?>) <?= $contatos->numero ?></td>
                        <td><?= $contatos->cep ?></td>
                        <td><?= $contatos->logradouro ?></td>
                        <td><?= $contatos->complemento ?></td>
                        <td><?= $contatos->bairro ?></td>
                        <td><?= $contatos->localidade  ?></td>
                        <td><?= $contatos->uf  ?></td>
                        <td><?= $contatos->numero_casa ?></td>
                        <td><?= Validar::dataBr($contatos->criado_em) ?></td>
                        <td>
                            <a href="#"></a>
                            <a href="#"></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>




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
                        }
                    }
                }
            })
        })
    </script>

</body>

</html>