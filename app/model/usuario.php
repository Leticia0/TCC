<?php

class Usuario
{
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $senha;
    private $dt_nasc;

    public function __construct($id, $nome, $sobrenome, $email, $senha, $dt_nasc){
    	
    	$this->setIdUsuario($id);
    	$this->setNome($nome);
    	$this->setSobrenome($sobrenome);
    	$this->setEmail($email);
    	$this->setSenha($senha);
    	$this->setDataNascimento($dt_nasc);
    }


    public function getAlIdusuario(){
        return $this->id;
    }

    public function getAlIdusuario(int $IdUsuario){
        $this->IdUsuario = $id;
    }

    public function getNome($nome){
        return $this->nome;
    }

    public function setSobrenome($sobrenome){
       return $this->sobrenome;
    }

    public function setEmail($email){
       return $this->sobrenome;
    }

    public function setSenha($senha){
       return $this->senha;
    }

    public function setDataNascimento(date(m-d-y /*formato de data*/) $dt_nasc){
       return $this->dt_nasc;
    }
}