<?php

class Usuarios extends Controller
{

    public function __construct()
    {
        $this->usuarioModel = $this->model('UsuarioModel');
    }

    public function cadastrar()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [

                'nome' => trim($formulario['nome']),
                'usuario' => trim($formulario['usuario']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha']),

                'nome_erro' => '',
                'usuario_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirmar_senha_erro' => ''

            ];
            if (in_array("", $formulario)) :

                if (empty($formulario['nome'])) :
                    $dados['nome_erro'] = "Preencha o campo <b>nome</b>";
                endif;

                if (empty($formulario['usuario'])) :
                    $dados['usuario_erro'] = "Preencha o campo <b>usuario</b>";
                endif;

                if (empty($formulario['email'])) :
                    $dados['email_erro'] = "Preencha o campo <b>email</b>";
                endif;

                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = "Preencha o campo <b>senha</b>";

                endif;

                if (empty($formulario['confirmar_senha_erro'])) :
                    $dados['confirmar_senha_erro'] = "Preencha o <b>campo</b> comfrimar Senha";

                endif;
            else :
                if (Validar::validarCampoString($formulario['nome'])) :
                    $dados['nome_erro'] = "Nome informado é <b>invalido</b>";

                elseif (Validar::validarCampoEmail($formulario['email'])) :
                    $dados['email_erro'] = "E-mail informado é <b>invalido</b>";

                elseif (Validar::validarCampoString($formulario['usuario'])) :
                    $dados['usuario_erro'] = "Usuario <b>invalido</b>";

                elseif ($this->usuarioModel->ValidarEmailUsuario($formulario['email'])) :
                    $dados['email_erro'] = "E-mail ja <b>cadastrado</b>";

                elseif ($this->usuarioModel->ValidarUsuario($formulario['usuario'])) :
                    $dados['usuario_erro'] = "Usuario <b>invalido</b>";

                elseif (strlen($formulario['senha']) < 6) :
                    $dados['senha_erro'] = "A senha deve ter no minino 6 <b>caracteres</b>";

                elseif ($formulario['senha'] != $formulario['confirmar_senha']) :
                    $dados['confirmar_senha_erro'] = "As senhas estao <b>diferentes</b>";

                else :
                    $dados['senha'] = password_hash($formulario['senha'], PASSWORD_DEFAULT);

                    if ($this->usuarioModel->insert($dados)) :
                        Sessao::mensagem('usuario', 'Cadastro realizado com sucesso');
                        Redirect::redirecionar('usuarios/login');

                    else :
                        die("Erro");

                    endif;
                endif;
            endif;
            var_dump($formulario);
        else :
            $dados = [
                'nome' => '',
                'usuario' => '',
                'email' => '',
                'senha' => '',
                'confirmar_senha' => '',

                'nome_erro' => '',
                'usuario_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirmar_senha_erro' => ''
            ];

        endif;

        $this->view('usuarios/cadastrar', $dados);
    }

    public function login()
    {
        if (Sessao::estaLogado()) :
            Redirect::redirecionar('usuarios/login');
        endif;
        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'usuario' => trim($formulario['usuario']),
                'senha' => trim($formulario['senha'])
            ];
            if (in_array("", $formulario)) :
                if (empty($formulario['usuario'])) :
                    $dados['usuario_erro'] = "Preencha o campo <b>usuario</b>";
                endif;

                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = "Preencha o campo <b>senha</b>";

                endif;
            else :
                if (Validar::validarCampoString($formulario['usuario'])) :
                    $dados['usuario_erro'] = "Formato invalido";
                else :
                    $login = $this->usuarioModel->login($formulario['usuario'], $formulario['senha']);

                    if ($login) :
                        $this->sesaoUsuario($login);
                        Redirect::redirecionar('contatos/index');
                    else :
                        Sessao::mensagem('usuario', 'Usuario ou senha invalidos', 'alert alert-danger');
                    endif;
                endif;
            endif;
        endif;

        $this->view('usuarios/login');
    }

    private function sesaoUsuario($login)
    {
        $_SESSION["USUARIO_ID"] = $login->id;
        $_SESSION["USUARIO_NOME_COMPLETO"] = $login->nome_completo;
        $_SESSION["USUARIO_USER"] = $login->usuario;
        $_SESSION["USUARIO_EMAIL"] = $login->email;
        $_SESSION["USUARIO_DATA_CRIACAO"] = $login->criado_em;
    }


    public function sair()
    {

        unset($_SESSION["USUARIO_ID"]);
        unset($_SESSION["USUARIO_NOME_COMPLETO"]);
        unset($_SESSION["USUARIO_USER"]);
        unset($_SESSION["USUARIO_EMAIL"]);
        unset($_SESSION["USUARIO_DATA_CRIACAO"]);

        session_destroy();

        Redirect::redirecionar('usuarios/login');
    }
}
