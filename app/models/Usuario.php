<?php

class Usuario
{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $tipo;


    // Metodo construtor da classe
    public function __construct($id, $nome, $email, $senha, $tipo)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->tipo = $tipo;
    }


    // Metodos Setters

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    // Metodos Getters

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
}
