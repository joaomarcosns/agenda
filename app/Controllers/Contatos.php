<?php

class Contatos extends Controller
{

    public function __construct()
    {
        if (!Sessao::estaLogado()) :
            Redirect::redirecionar('usuarios/login');
        endif;
        $this->telefoneModel = $this->model('telefoneModel');
        $this->contatoModel = $this->model('contatoModel');
        $this->enderecoModel = $this->model('enderecoModel');
    }

    public function index()
    {
        $dados =
        [

        ];
        $this->view('contatos/index');
    }

    public function cadastar()
    {
        $idUsuario = (int) $_SESSION["USUARIO_ID"];

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'idUsuario' => $idUsuario,
                'nome' => trim($formulario['nome']),
                'ddd' => trim($formulario['ddd']),
                'numero' => trim($formulario['numero']),
                
                'cep' => trim($formulario['cep']),
                'rua' => trim($formulario['rua']),
                'complemento' => trim($formulario['complemento']),
                'bairro' => trim($formulario['bairro']),
                'cidade' => trim($formulario['city']),
                'uf' => trim($formulario['estado']),
                'numero-casa' => trim($formulario['numero-casa'])
            ];

            if (in_array("", $formulario)) :
                if (empty($formulario['nome'])) :
                    $dados['nome_erro'] = "Preencha o campo!";
                endif;

                if (empty($formulario['ddd'])) :
                    $dados['ddd_erro'] = "Preencha o campo!";
                endif;

                if (empty($formulario['numero'])) :
                    $dados['numero_erro'] = "Preencha o campo!";
                endif;

                if (empty($formulario['cep'])) :
                    $dados['cep_erro'] = "Preencha o campo!";
                endif;

                if (empty($formulario['rua'])) :
                    $dados['rua_erro'] = "Preencha o campo!";
                endif;

                if (empty($formulario['complemento'])) :
                    $dados['complemento_erro'] = "Preencha o campo!";
                endif;

                if (empty($formulario['bairro'])) :
                    $dados['bairro_erro'] = "Preencha o campo!";
                endif;

                if (empty($formulario['cidade'])) :
                    $dados['cidade_erro'] = "Preencha o campo!";
                endif;

                if (empty($formulario['uf'])) :
                    $dados['uf_erro'] = "Preencha o campo!";
                endif;

                if (empty($formulario['numero-casa'])) :
                    $dados['numero-casa_erro'] = "Preencha o campo!";
                endif;

            else :
                if (Validar::validarCampoString($formulario['nome'])) :
                    $dados['nome_erro'] = "Formato informado é <b>invalido</b>";

                elseif (Validar::validarCampoNumerico($formulario['ddd'])) :
                    $dados['ddd_erro'] = "Formato informado é <b>invalido</b>";

                elseif (strlen($formulario['ddd'] ) != 2) :
                    $dados['ddd_erro'] = "Quantidade informado é <b>invalido</b>";

                elseif (Validar::validarCampoNumerico($formulario['numero'])) :
                    $dados['numero_erro'] = "Formato informado é <b>invalido</b>";

                elseif (strlen($formulario['numero']) != 9) :
                    $dados['numero_erro'] = "Quantidade informado é <b>invalido</b>";

                elseif (Validar::validarCampoNumerico($formulario['cep'])) :
                    $dados['cep_erro'] = "Formato informado é <b>invalido</b>";

                elseif (strlen($formulario['cep'] ) != 8) :
                    $dados['cep_erro'] = "Quantidade informado é <b>invalido</b>";

                elseif (Validar::validarCampoString($formulario['rua'])) :
                    $dados['rua_erro'] = "Formato informado é <b>invalido</b>";

                elseif (Validar::validarCampoString($formulario['complemento'])) :
                    $dados['complemento_erro'] = "Formato informado é <b>invalido</b>";

                elseif (Validar::validarCampoString($formulario['bairro'])) :
                    $dados['bairro_erro'] = "Formato informado é <b>invalido</b>";

                elseif (Validar::validarCampoNumerico($formulario['numero-casa'])) :
                    $dados['numero-casa_erro'] = "Formato informado é <b>invalido</b>";

                else :
                    if ($this->contatoModel->cadastar($dados)) :
                        $ultimoid = $this->contatoModel->getUltimoId();
                        $ultimoid =  (int) $ultimoid;
                        echo "Ok";
                    else :
                        die("Erro");
                    endif;

                    if ($this->telefoneModel->cadastar($dados, $ultimoid)) :
                        echo "Ok";
                    else :
                        die("Erro");
                    endif;

                    if ($this->enderecoModel->cadastar($dados, $ultimoid)) :
                        echo "Ok";
                    else :
                        die("Erro");
                    endif;

                endif;

            endif;
            // var_dump($formulario);
        else :
            $dados = [
                'nome' => '',
                'ddd' => '',
                'numero' => '',
                'cep' => '',
                'rua' => '',
                'complemento' => '',
                'bairro' => '',
                'cidade' => '',
                'uf' => '',
                'numero-casa' => '',
                // 
                'nome_erro' => '',
                'ddd_erro' => '',
                'numero_erro' => '',
                'cep_erro' => '',
                'rua_erro' => '',
                'complemento_erro' => '',
                'bairro_erro' => '',
                'cidade_erro' => '',
                'uf_erro' => '',
                'numero-casa_erro' => '',
            ];

        endif;


        $this->view('contatos/cadastar', $dados);
    }
}
