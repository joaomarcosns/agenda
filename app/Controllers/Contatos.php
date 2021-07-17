<?php

class Contatos extends Controller
{

    public function __construct()
    {
        $this->agendaModel = $this->model('UsuarioModel');
    }

    public function index()
    {
        $this->view('contatos/index');
    }

    public function cadastar()
    {
        
        $this->view('contatos/cadastar');
    }
}
