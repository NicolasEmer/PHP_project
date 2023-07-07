<?php


require_once("../models/DAO.php");

class Usuario {
    
    private $id;
    private $nome,$senha;

    public function getId() {
        return $this->id;
    }

    public function setId($inte) {
        $this->id=$inte;
    }


    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome2) {
        $this->nome = $nome2;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha2) {
        $this->senha = $senha2;
    }
    
    public function logar_verif(){
        $banco = new Conexao();


        $novoUs=$banco->getUsuario();
        foreach ($novoUs as $value){
            if ($value['nome'] == $this->nome &&
            password_verify($this->senha,$value['senha'])){
                return true;
            }
        }
        return false;
    }
}
