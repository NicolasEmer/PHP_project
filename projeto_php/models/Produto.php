<?php


require_once("../models/DAO.php");

class Produto {
    
    private $id;
    private $nome,$marca,$tamanho;
    public $rows;

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

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca2) {
        $this->marca = $marca2;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function setTamanho($tamanho2) {
        $this->tamanho = $tamanho2;
    }
    
    public function cadastrar(){
        $banco = new Conexao();
        return $banco->setProduto($this->nome, $this->marca, $this->tamanho);
    }

    public function editar(){
        $banco = new Conexao();
        return $banco->updateProduto($this->nome, $this->marca, $this->tamanho, $this->id);
    }

    public function deletar($id){
        $banco = new Conexao();
        return $banco->deleteProduto($id);
    }

    public function getById($id){
        $banco = new Conexao();
        return $banco->getByIdContr($id);
    }

    public function getAllProdutos(){
        $banco = new Conexao();
        $this->rows = $banco->getProdutos();
    }
}
