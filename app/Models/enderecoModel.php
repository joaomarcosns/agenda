<?php

class enderecoModel
{
    private $id;
    private $idContato;
    private $cep;
    private $logradouro;
    private $complemento;
    private $bairro;
    private $localidade;
    private $uf;
    private $numeroCasa;

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
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @return mixed
     */
    public function getLocalidade()
    {
        return $this->localidade;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @return mixed
     */
    public function getNumeroCasa()
    {
        return $this->numeroCasa;
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
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @param mixed $logradouro
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @param mixed $localidade
     */
    public function setLocalidade($localidade)
    {
        $this->localidade = $localidade;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @param mixed $numeroCasa
     */
    public function setNumeroCasa($numeroCasa)
    {
        $this->numeroCasa = $numeroCasa;
    }

    public function cadastar($dados, $ultimoid)
    {
        $this->setIdContato($ultimoid);
        $this->setCep($dados['cep']);
        $this->setLogradouro($dados['rua']);
        $this->setComplemento($dados['complemento']);
        $this->setBairro($dados['bairro']);
        $this->setLocalidade($dados['cidade']);
        $this->setUf($dados['uf']);
        $this->setNumeroCasa($dados['numero-casa']);

        $this->db->query("INSERT INTO endereco(id_contato, cep, logradouro, complemento, bairro, localidade, uf, numero_casa) VALUES (:id_contato, :cep, :logradouro, :complemento, :bairro, :localidade, :uf, :numero_casa)");

        $this->db->bind(':id_contato', $this->getIdContato());
        $this->db->bind(':cep', $this->getCep());
        $this->db->bind(':logradouro', $this->getLogradouro());
        $this->db->bind(':complemento', $this->getComplemento());
        $this->db->bind(':bairro', $this->getBairro());
        $this->db->bind(':localidade', $this->getLocalidade());
        $this->db->bind(':uf', $this->getUf());
        $this->db->bind(':numero_casa', $this->getNumeroCasa());

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }

    public function cadastro($dados, $id)
    {
        $this->setIdContato($id);
        $this->setCep($dados['cep']);
        $this->setLogradouro($dados['rua']);
        $this->setComplemento($dados['complemento']);
        $this->setBairro($dados['bairro']);
        $this->setLocalidade($dados['cidade']);
        $this->setUf($dados['uf']);
        $this->setNumeroCasa($dados['numero-casa']);

        $this->db->query("INSERT INTO endereco(id_contato, cep, logradouro, complemento, bairro, localidade, uf, numero_casa) VALUES (:id_contato, :cep, :logradouro, :complemento, :bairro, :localidade, :uf, :numero_casa)");

        $this->db->bind(':id_contato', $this->getIdContato());
        $this->db->bind(':cep', $this->getCep());
        $this->db->bind(':logradouro', $this->getLogradouro());
        $this->db->bind(':complemento', $this->getComplemento());
        $this->db->bind(':bairro', $this->getBairro());
        $this->db->bind(':localidade', $this->getLocalidade());
        $this->db->bind(':uf', $this->getUf());
        $this->db->bind(':numero_casa', $this->getNumeroCasa());

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }

    public function selectById($idContato)
    {
        $this->setIdContato($idContato);
        $this->db->query("SELECT * FROM endereco WHERE id_contato = :id_contato");
        $this->db->bind(':id_contato', $this->getIdContato());
        return $this->db->resultados();
    }
}
