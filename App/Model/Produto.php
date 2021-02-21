<?php
namespace App\Model;

class Produto {
    

    private $nome, $descricao, $id;
    
    /**
     * Retorna o valor da Descrição
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Muda o valor do Parânetro descrição
     *
     * @return  $descricao
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Retorna o Valor de Nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Muda o Valor do parâmetro nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}