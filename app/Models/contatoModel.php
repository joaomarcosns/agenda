<?php

class contatoModel
{
    private $id;
    private $idUsuario;
    private $nome;
    private $ultimoId;

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
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getUltimoId()
    {
        return $this->ultimoId;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $ultimoId
     */
    public function setUltimoId($ultimoId)
    {
        $this->ultimoId = $ultimoId;
    }

    public function cadastar($dados)
    {
        $id = (int)$dados['idUsuario'];
        $this->setIdUsuario($id);
        $this->setNome($dados['nome']);
        $this->db->query("INSERT INTO contato(id_usuario, nome) VALUES (:id_usuario, :nome)");
        $this->db->bind(':id_usuario', $this->getIdUsuario());
        $this->db->bind(':nome', $this->getNome());

        if ($this->db->executa()) :
            $this->setUltimoId($this->db->ultimoIdInserido());
            return true;
        else :
            return false;
        endif;
        
    }

    public function selectAll($id)
    {
        $this->setIdUsuario($id);
        $this->db->query('
            SELECT contato.id ,contato.nome, contato.criado_em
            FROM contato, telefone, endereco
            WHERE contato.id = telefone.id_contato
            AND contato.id = endereco.id_contato
            AND contato.id_usuario = :id_usuario
            GROUP BY contato.nome
            ORDER BY contato.id ASC
        ');
        $this->db->bind(':id_usuario', $this->getIdUsuario());
        return $this->db->resultados();
    }

    public function selectById($id)
    {
        $this->setId($id);
        $this->db->query('SELECT * FROM contato WHERE id = :id');
        $this->db->bind(':id', $this->getId());
        return $this->db->resultados();
    }
}
