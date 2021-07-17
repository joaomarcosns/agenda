<?php

class usuarioModel
{
    private $id;
    private $nomeCompleto;
    private $usuario;
    private $email;
    private $senha;

    public function __construct()
    {
        $this->db = new Database();
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nomeCompleto
     */
    public function setNomeCompleto($nomeCompleto)
    {
        $this->nomeCompleto = $nomeCompleto;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


    public function ValidarEmailUsuario($email)
    {
        $this->setEmail($email);
        $this->db->query("SELECT email from usuario WHERE email = :email");
        $this->db->bind(":email", $this->getEmail());

        if ($this->db->resultado()) :
            return true;
        else :
            return false;
        endif;
        // return false;
    }

    public function ValidarUsuario($usuario)
    {
        $this->db->query("SELECT usuario from usuario WHERE usuario = :usuario");
        $this->db->bind(":usuario", $usuario);

        if ($this->db->resultado()) :
            return true;
        else :
            return false;
        endif;
        // return false;
    }

    public function login($usuario, $senha)
    {
        $this->setUsuario($usuario);
        $this->setSenha($senha);

        $this->db->query("SELECT * FROM usuario WHERE usuario = :usuario");
        $this->db->bind(":usuario", $this->getUsuario());

        if ($this->db->resultado()) :
            $resultado = $this->db->resultado();
            if (password_verify($this->getSenha(), $resultado->senha)) :
                return $resultado;
            else :
                return false;
            endif;
        else :
            return false;
        endif;
    }

    
    public function insert($dados)
    {
        $this->setUsuario($dados['usuario']);
        $this->setSenha($dados['senha']);
        $this->setEmail($dados['email']);
        $this->setNomeCompleto($dados['nome']);


        $this->db->query("INSERT INTO usuario(usuario, senha, email, nome_completo) VALUES (:usuario, :senha, :email, :nome)");

        $this->db->bind("usuario", $this->getUsuario());
        $this->db->bind("senha", $this->getSenha());
        $this->db->bind("email", $this->getEmail());
        $this->db->bind("nome", $this->getNomeCompleto());

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }
}
