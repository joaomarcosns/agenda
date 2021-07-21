<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>/public/css/style.css">
    <link rel="shortcut icon" href="<?= URL ?>/public/img/calendar-alt-regular.svg" type="image/x-icon">
</head>
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="card" style="width: 30rem;">
        <h2 class="card-title text-center mt-2">Cadastrar</h2>

        <div class="card-body">
            <form action="<?= URL ?>/usuarios/cadastrar" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Nome Completo</label>
                    <input type="text" name="nome" id="nome" required class="form-control <?= $dados['nome_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $dados['nome_erro'] ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Usuario</label>
                    <input type="text" name="usuario" id="usuario" required class="form-control <?= $dados['usuario_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $dados['usuario_erro'] ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" id="email" required class="form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $dados['email_erro'] ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Senha</label>
                    <input type="password" name="senha" id="senha" required class="form-control <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $dados['senha_erro'] ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Comfrimar Senha</label>
                    <input type="password" name="confirmar_senha" id="confirmar_senha" required class="form-control <?= $dados['confirmar_senha_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $dados['confirmar_senha_erro'] ?>
                    </div>
                </div>
                

                <div class="d-flex bd-highlight mb-3">
                    <div class="p-2 bd-highlight"><button type="submit" class="btn btn-primary">Cadastrar</button></div>
                    <div class="ms-auto p-2 bd-highlight"><a href="<?= URL ?>/usuarios/login">Já tem conta?</a></div>
                </div>
            </form>
        </div>
    </div>
</div>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!-- 
USUARIO VARCHAR(50) NOT NULL,
EMAIL VARCHAR(200) NOT NULL,
SENHA VARCHAR(200) NOT NULL, -->