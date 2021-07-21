<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL ?>/public/css/style.css">
    <link rel="shortcut icon" href="<?= URL ?>/public/img/calendar-alt-regular.svg" type="image/x-icon">
</head>

<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="card" style="width: 30rem;">
        <h2 class="card-title text-center mt-2">Login</h2>
        <div class="text-center">
            <?= Sessao::mensagem('usuario') ?>
        </div>
        <div class="card-body">
            <form method="post" action="<?= URL ?>/usuarios/login">
                <div class="mb-3">
                    <label for="" class="form-label">Usuario</label>
                    <input type="text" name="usuario" id="usuario" required class="form-control <?= $dados['usuario_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $dados['usuario_erro'] ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Senha</label>
                    <input type="password" name="senha" id="senha" required class="form-control <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $dados['senha_erro'] ?>
                    </div>
                </div>

                <div class="d-flex bd-highlight mb-3">
                    <div class="p-2 bd-highlight"><button type="submit" class="btn btn-primary">login</button></div>
                    <div class="ms-auto p-2 bd-highlight"><a href="<?= URL ?>/usuarios/cadastrar">Cadastar</a></div>
                </div>
            </form>
        </div>
    </div>
</div>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>