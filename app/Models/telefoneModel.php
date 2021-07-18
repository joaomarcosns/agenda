<?php

class telefoneModel
{
    private $id;
    private $idContato;
    private $ddd;
    private $numero;

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
    public function getIdContato()
    {
        return $this->idContato;
    }

    /**
     * @return mixed
     */
    public function getDdd()
    {
        return $this->ddd;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $idContato
     */
    public function setIdContato($idContato)
    {
        $this->idContato = $idContato;
    }

    /**
     * @param mixed $ddd
     */
    public function setDdd($ddd)
    {
        $this->ddd = $ddd;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function cadastar($dados, $ultimoid)
    {
        $this->setIdContato($ultimoid);
        $this->setDdd($dados['ddd']);
        $this->setNumero($dados['numero']);
        $this->db->query("INSERT INTO telefone(id_contato, ddd, numero) VALUES (:id_contato, :ddd, :numero)");
        $this->db->bind(':id_contato', $this->getIdContato());
        $this->db->bind(':ddd', $this->getDdd());
        $this->db->bind(':numero', $this->getNumero());
        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }

    
}
